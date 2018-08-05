<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Admin\Pages;
use App\Http\Env\Admin;

/**
 * Class PageController
 * @package App\Http\Controllers
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class PageController extends Controller
{
    /**
     * Get dynamically category, subcategory and landing pages
     * @param null $slug
     * @param null $slug2
     * @param null $slug3
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show($slug = null, $slug2 = null, $slug3 = null)
    {
        if(Admin::getAdminUrl() != $slug) {
            if (!$slug2) {  // dynamic category pages
                return $this->getCategoryPage($slug);
            }else{   // dynamic landing pages
                return $this->getLandingPage($slug2, $slug3);
            }
            //@todo redirect to a 404 page
            return redirect()->to('/')->with(['page' => 'Page not found']);
        }
    }

    /**
     * Get dynamically category pages
     * @param string $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    private function getCategoryPage($slug)
    {
        $categoryPage = DB::table('categories')->select('categories.id as cid', 'categories.name as cname', 'categories.content as content',
            'users.name as uname', 'categories.url_name as curl_name', 'pages.url_name as purl_name',
            'pages.created_at as created_at', 'pages.is_active as is_active',
            'pages.title as ptitle', 'images.path as path', 'images.alt as alt_image')
            ->leftJoin('users', 'users.id', '=', 'categories.admin_id')
            ->leftJoin('pages', 'pages.category_id', '=', 'categories.id')
            ->leftJoin('page_content', 'page_content.page_id', '=', 'pages.id')
            ->leftJoin('images','images.id', '=', 'page_content.feature_image')
            ->where([
                'categories.url_name' => $slug
            ])
            ->where(function ($query)
            {
                $query->where( 'pages.is_active', '=', '1' )
                      ->orWhereNull( 'pages.is_active');
            })
            ->orderBy('pages.position', 'ASC')
            ->get();
        if ($categoryPage->first()){ // check for categories pages
            return view('frontend/pages/category', [
                'categories'       => $categoryPage,
                'category_content' => $categoryPage->first()->content
            ]);
        }else{// check for static pages
           return $this->getLandingPage($slug, null);
        }
    }

    /**
     * Get dynamically static and subcategory pages
     * @param string $slug2
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    private function getLandingPage($slug2, $slug3)
    {
        $page = DB::table('pages')->select('pages.id as pid',
            'pages.title as title',
            'page_content.short_description as short_description',
            'page_content.description as description',
            'pages.enable_comments as enable_comments')
            ->leftJoin('page_content', 'page_content.page_id', '=', 'pages.id')
            ->where([
                'is_active' => 1,
            ])
            ->where(function ($query) use ($slug2, $slug3) {
                $query->where('url_name', '=', $slug2)->orWhere('url_name', '=', $slug3); // checks for category or subcategory pages
            })->limit(1)->first();
        if ($page) {
            $comments = DB::table('comments')->select('comments.description as description', 'comments.name as author', 'comments.created_at as created_at')
                ->where([
                    'status' => 1,
                    'page_id' => $page->pid
                ])->get();
            return view('frontend/pages/dynamic', [
                'page' => $page,
                'comments' => $comments,
            ]);
        }else{
            //getting subcategories pages to be displayed in the view
            $subcategories = DB::table('subcategories')->select('subcategories.id as cid', 'subcategories.name as cname', 'subcategories.content as content',
                'subcategories.url_name as curl_name', 'pages.url_name as purl_name',
                'pages.created_at as created_at', 'pages.is_active as is_active',
                'pages.title as ptitle', 'images.path as path', 'images.alt as alt_image')
                ->leftJoin('pages', 'pages.subcategory_id', '=', 'subcategories.id')
                ->leftJoin('page_content', 'page_content.page_id', '=', 'pages.id')
                ->leftJoin('images','images.id', '=', 'page_content.feature_image')
                ->where([
                    'subcategories.url_name' => $slug2
                ])
                ->where(function ($query)
                {
                    $query->where( 'pages.is_active', '=', '1' )
                        ->orWhereNull( 'pages.is_active');
                })
                ->orderBy('pages.position', 'ASC')
                ->get();
            if (count($subcategories) > 0) {
                return view('frontend/pages/subcategory', [
                    'subcategories' => $subcategories,
                    'subcategory_content' => $subcategories->first()->content
                ]);
            }
        }
        abort(404);   // redirect user to 404
    }
}
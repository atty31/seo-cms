<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Admin\PageContent;
use App\Models\Admin\Pages;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Http\Logs\Admin\Log;
use Monolog\Logger;
/**
 * Class HomeController
 * @package App\Http\Controllers
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class PagesController extends Controller
{
    /**
     * @var int
     */
    public $staticType = 1;
    /**
     * @var int
     */
    public $categoryType = 0;
    /**
     * @var array
     */
    private $pageTypes = ['static','posts','subcategory'];

    /**
     * Log file name
     * @var string
     */
    private $logFileName = 'pages';
    /**
     * @var
     */
    private $log;
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->log = new Log($this->logFileName);
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $pages = DB::table('pages')->select('categories.name as cname', 'pages.is_active as pstatus',
            'pages.is_static as pstatic', 'pages.id as pid','pages.url_name as purl_name','pages.title as ptitle',
            'users.name as pname', 'pages.updated_at as pupdated_at', 'pages.title as title',
            'subcategories.name as subcategory_name')
            ->leftJoin('users','users.id', '=', 'pages.user_id')
            ->leftJoin('categories','categories.id', '=', 'pages.category_id')
            ->leftJoin('subcategories','subcategories.id', '=', 'pages.subcategory_id')
            ->paginate(20);
        return view('adminlte::pages/list',  [
            'Page'  => 'List View',
            'pages' => $pages
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newPage()
    {
        $categories = DB::table('categories')->get();
        return view('adminlte::pages/new', [
            'categories' => $categories,
        ]);
    }
    /**
     * Save new category in categories table
     * @param Requests\Admin\PagesFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\Admin\PagesFormRequest $request)
    {
        $page = new Pages();
        $page->title               = trim($request->input('title'));
        $page->url_name            = $request->input('url_name');
        $page->category_id         = $request->input('category_id');
        $page->subcategory_id      = 0;
        if ($request->input('subcategory_id')) {
            $page->subcategory_id = $request->input('subcategory_id');
        }
        $page->enable_comments     = $request->input('enable_comments');
        $page->page_cols           = $request->input('page_cols');
        $page->is_static           = $request->input('is_static');
        $page->is_active           = $request->input('is_active');
        $page->google_ads_active   = $request->input('google_ads_active');
        $page->facebook_ads_active = $request->input('facebook_ads_active');
        $page->google_analytics    = $request->input('google_analytics');
        $page->page_cols           = $request->input('page_cols');
        $page->tags_ids            = implode(',',$request->input('tags_id'));
        $page->position            = Pages::where('is_static', $request->input('is_static'))->count() + 1;
        $page->user_id             = Auth::id();
        try{
            $page->save();
            $this->log->logMessage(Logger::INFO, 'A new page: '. $page->title.' - was created by the user with the id '.Auth::id());
            $pageContent = new PageContent();
            $pageContent->short_description = trim($request->input('short_description'));
            $pageContent->description       = trim($request->input('description'));
            $pageContent->author_name       = trim($request->input('author_name'));
            $pageContent->meta_tags         = trim($request->input('meta_tags'));
            $pageContent->page_id           = $page->id;
            $pageContent->feature_image     = $request->input('feature-image');

            try {
                $pageContent->save();
                $this->log->logMessage(Logger::INFO, 'Page content for the page: '. $page->title.' - was created by the user with the id '.Auth::id());
                $message = ['msg' => 'A new page was created!'];
            }catch (Exception $error){
                $message = ['msg_error' => $error->getMessage()];
                $this->log->logMessage(Logger::ERROR, $error->getMessage());
            }
        }catch (Exception $error){
            $message = ['msg_error' => $error->getMessage()];
            $this->log->logMessage(Logger::ERROR, $error->getMessage());
        }

        return redirect()->route('pages')->with($message);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($id)
    {
        //make the design , categories, subcategories and media
        $page = DB::table('pages')
            ->select('categories.id as cid', 'categories.name as cname', 'subcategories.id as sid', 'subcategories.name as sname',
                'pages.is_active as pstatus', 'pages.is_static as pstatic', 'pages.enable_comments as comments',
                'pages.google_ads_active as pgoogleads', 'pages.facebook_ads_active as pfacebookads', 'pages.google_analytics as pgoogleanalytics',
                'pages.id as pid','pages.url_name as purl_name','pages.title as ptitle', 'users.name as pname', 'pages.updated_at as pupdated_at',
                'pages.created_at as pcreated_at', 'pages.page_cols as ppage_cols', 'page_content.short_description as pcshort',
                'page_content.description as pcdesc', 'page_content.author_name as pcauthor', 'page_content.meta_tags as pcmeta',
                'images.path as path', 'images.alt as alt_image', 'images.name as iname', 'pages.tags_ids')
            ->leftJoin('users','users.id', '=', 'pages.user_id')
            ->leftJoin('page_content','page_content.page_id', '=', 'pages.id')
            ->leftJoin('categories','categories.id', '=', 'pages.category_id')
            ->leftJoin('tags','tags.category_id', '=', 'pages.category_id')
            ->leftJoin('subcategories','subcategories.id', '=', 'pages.subcategory_id')
            ->leftJoin('images','images.id', '=', 'page_content.feature_image')
            ->where('pages.id', $id)->first();
        $categories = DB::table('categories')->get();
        $subcategories = DB::table('subcategories')->get();

        $tags = DB::table('tags')
            ->select('tags.id', 'tags.name')
            ->where('category_id', $page->cid)
            ->get();

        return view('adminlte::pages/view',  [
            'page'          => $page,
            'categories'    => $categories,
            'subcategories' => $subcategories,
            'tags'          => $tags,
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $pageContent = PageContent::where('page_id', '=', $id)->first();
        if ( $pageContent->delete() && Pages::destroy($id)){
            $message = 'A page was deleted';
        }

        return redirect()->route('pages')->with(['delete_msg' => $message]);
    }

    /**
     * Update a post/static page
     * @param int $id
     * @param Requests\Admin\PagesFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, Requests\Admin\PagesFormRequest $request)
    {
        $page = Pages::find($id);
        $page->title               = trim($request->input('title'));
        $page->url_name            = $request->input('url_name');
        $page->page_cols           = $request->input('page_cols');
        $page->is_static           = $request->input('is_static');
        $page->category_id         = $request->input('category_id');
        $page->subcategory_id      = $request->input('subcategory_id');
        if ((int) $page->is_static === $this->staticType ){
            $page->category_id = 0;
            $page->subcategory_id = 0;

        }
        $page->enable_comments     = $request->input('enable_comments');
        $page->is_active           = $request->input('is_active');
        $page->google_ads_active   = $request->input('google_ads_active');
        $page->facebook_ads_active = $request->input('facebook_ads_active');
        $page->google_analytics    = $request->input('google_analytics');
        $page->page_cols           = $request->input('page_cols');
        if ($request->input('tags_id')){
            $page->tags_ids = implode(',', $request->input('tags_id'));
        }
        $page->user_id = Auth::id();
        try{
            $page->save();
            $this->log->logMessage(Logger::INFO, 'The page: '. $page->title.' - was updated by the user with the id '.Auth::id());
            $pageContent = PageContent::where('page_id','=',$id)->first();
            $pageContent->short_description = trim($request->input('short_description'));
            $pageContent->description       = trim($request->input('description'));
            $pageContent->author_name       = trim($request->input('author_name'));
            $pageContent->meta_tags         = trim($request->input('meta_tags'));
            $pageContent->feature_image     = $request->input('feature-image');
            try{
                $pageContent->save();
                $this->log->logMessage(Logger::INFO, 'Page content for the page: '. $page->title.' - was updated by the user with the id '.Auth::id());
                $message = ['msg' => 'A page was updated!'];
            }catch (Exception $error){
                $message = ['msg_error' => $error->getMessage()];
                $this->log->logMessage(Logger::ERROR, $error->getMessage());
            }
        }catch (Exception $error){
            $message = ['msg_error' => $error->getMessage()];
            $this->log->logMessage(Logger::ERROR, $error->getMessage());
        }
        return redirect()->route('pages')->with($message);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listType(Request $request, $type = null)
    {
        $pageType = $request->segments()[1];
        if (in_array($pageType, $this->pageTypes)) {
            $pages = DB::table('pages')->select('categories.name as cname','pages.position as position',
                'pages.is_active as pstatus', 'pages.is_static as pstatic', 'pages.id as pid', 'pages.url_name as purl_name',
                'users.name as pname', 'pages.updated_at as pupdated_at', 'pages.title as title')
                ->leftJoin('users', 'users.id', '=', 'pages.user_id')
                ->leftJoin('categories', 'categories.id', '=', 'pages.category_id');
            if ((string)$pageType === 'static') {
                $pages = $pages->where('pages.is_static', 1);
            } elseif ((string)$pageType === 'posts') {
                $pages = $pages->where('pages.is_static', 0);
            }
            $pages = $pages->orderBy('position', 'asc')->paginate(20);

            return view('adminlte::pages/'.$pageType,  [
                'page_type' => 'List '.$pageType.' view',
                'pages'     => $pages
            ]);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePositions(Request $request)
    {
        $positions = $request->input('positions');
        $ids = $request->input('ids');
        $pageType = $request->input('page-type');
        $pos = array_combine($ids, $positions);
        foreach($pos as $key => $value){
            $page = Pages::find($key);
            $page->position = (int) $value;
            try {
                $page->save();
            }catch (Exception $error){
                $this->log->logMessage(Logger::ERROR, $error->getMessage());
            }
        }
        $message = 'Page positions were updated with success!';
        return redirect()->route('page.'.$pageType)->with(['msg' => $message]);
    }
}
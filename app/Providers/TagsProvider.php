<?php

namespace App\Providers;

use App\Models\Frontend\PageModel;
use App\Models\Frontend\TagsModel;
use Illuminate\Support\ServiceProvider;
use Request;

/**
 * Class TagsProvider
 * @package App\Providers
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class TagsProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     * Get all of the tags for category|subcategory|post pages
     * @return void
     */
    public function register()
    {
        //loading tags on category, subcategory and posts
        view()->composer('frontend.pages.tags', function($view)
        {
            $count = (int) count(Request::segments());
            if ($count === 1){
                $type = PageModel::CATEGORY;
                /* @var $id int */
                $id  = PageModel::getCategoryIdByName(Request::segment($count));
            }elseif($count === 2){
                $type = PageModel::SUBCATEGORY;
                /* @var $id int */
                $id  = PageModel::getSubCategoryIdByName(Request::segment($count));
            }elseif($count === 3){
                $type = PageModel::POST;
                /* @var $id array */
                $id  = PageModel::getPageIdByName(Request::segment($count));
            }else{
                abort(404);
            }

            $view->with([
               'tags'  => $id ? TagsModel::getTags($id->type_id, (string) $type) : false
            ]);
        });

    }
}
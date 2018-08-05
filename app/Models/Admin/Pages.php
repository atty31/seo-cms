<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Env\Admin;
/**
 * Class Pages
 * @package App\Models\Admin
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class Pages extends Model
{
    //table
    protected $table = 'pages';

    /**
     * Get page by id
     * @param int $id
     * @return bool
     */
    public static function getPageById(int $id) : bool
    {
        return Pages::find($id) ? true : false;
    }

    /**
     * @param int $id
     * @return string
     */
    public static function getPageFullUrlById(int $id) : string
    {
        $page = DB::table('pages')->select('pages.url_name as url_name', 'categories.url_name as cat_url_name',
            'subcategories.url_name as subcat_url_name')
            ->leftJoin('categories', 'categories.id', '=', 'pages.category_id')
            ->leftJoin('subcategories', 'categories.id', '=', 'subcategories.category_id')
            ->where([
                'pages.id' => $id
            ])
            ->limit(1)
            ->get();
        return is_null($page[0]->subcat_url_name) ? url('/').'/'.$page[0]->cat_url_name . '/' . $page[0]->url_name :
            url('/').'/'.$page[0]->cat_url_name . '/' . $page[0]->subcat_url_name . '/' . $page[0]->url_name;
    }

}
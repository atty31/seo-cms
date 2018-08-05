<?php

namespace App\Models\Frontend;
use DB;

/**
 * Class HeaderMenu
 * @package App\Models\Frontend
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class HeaderMenu
{
    /**
     * Get categories pages
     * @return mixed
     */
    public static function getCategoryPages()
    {
        $pages = DB::table('categories')->select('categories.name as name', 'categories.url_name as url_name',
                'categories.id as pid' , DB::raw('group_concat(subcategories.name) as subname'), DB::raw('group_concat(subcategories.id) as subid'),
                DB::raw('group_concat(subcategories.url_name) as suburl_name'))
                ->leftJoin('subcategories', function($join)
                {
                    $join->on('subcategories.category_id', '=', 'categories.id');
                    $join->on('subcategories.status', '=', DB::raw('1'));
                })
                ->where([
                    'categories.status'    => '1',
                ])
                ->groupBy('categories.name')
                ->orderBy('position', 'asc')
                ->get();
        return $pages;
    }

    /**
     * Get static pages
     * @return mixed
     */
    public static function getStaticPages()
    {
        $pages = DB::table('pages')->select('pages.title as pname', 'pages.url_name as purl_name', 'pages.id as pid')
            ->where([
                'is_static' => '1',
                'is_active' => '1'
            ])
            ->orderBy('position', 'asc')
            ->get();
        return $pages;
    }
}
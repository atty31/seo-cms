<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class PageModel
 * @package App\Models\Frontend
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class PageModel extends Model
{
    const CATEGORY = 'category';
    const SUBCATEGORY = 'subcategory';
    const POST = 'post';
    /**
     * Get category id by url name
     * @param string $name
     * @return mixed
     */
    public static function getCategoryIdByName(string $name)
    {
        $typeId = DB::table('categories')->select('categories.id as type_id')
            ->where('categories.url_name', $name)->first();
        return $typeId ? $typeId : false;
    }

    /**
     * Get subcategory id by url name
     * @param string $name
     * @return mixed
     */
    public static function getSubCategoryIdByName(string $name)
    {
        $typeId = DB::table('subcategories')->select('subcategories.id as type_id')
            ->where('subcategories.url_name', $name)->first();
        return $typeId ? $typeId : false;
    }

    /**
     * Get tags id from the page table, used by the TagsProvider
     * @param string $name
     * @return bool
     */
    public static function getPageIdByName(string $name)
    {
        $typeId = DB::table('pages')->select('pages.tags_ids as type_id')
            ->where('pages.url_name', $name)->first();
        return $typeId ? $typeId : false;
    }
}
<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class TagsModel
 * @package App\Models\Frontend
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class TagsModel extends Model
{

    const VISIBLE = 1;
    const HIDDEN = 0;
    /**
     * @param int $id
     * @param string $type
     * @return mixed
     */
    public static function getTags($id, string $type)
    {
        DB::enableQueryLog();
        $tags = DB::table('tags')->select('tags.name as tname', 'tags.id as tid');

        if ($type === PageModel::CATEGORY){ //get tags for categories
            $tags->where('tags.category_id', $id);
        }elseif($type === PageModel::SUBCATEGORY) { // get tags for subcategories
            $tags->where('tags.subcategory_id', $id);
        }elseif($type === PageModel::POST) {   // get tags for posts
            $tags->whereIn('tags.id', explode(',', $id));
        }
        
        $tags->where('tags.status', TagsModel::VISIBLE);
        $tags = $tags->get();

        return $tags->count() ? $tags : false;
    }

    /**
     * @return mixed
     */
    public static function getTagModelInstance()
    {
        return DB::table('tags');
    }
}
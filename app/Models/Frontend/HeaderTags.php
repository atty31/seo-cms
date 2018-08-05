<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\Admin\Settings as SettingsModel;
/**
 * Class HeaderTags
 * @package App\Models\Frontend
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class HeaderTags extends Model
{
    /**
     * Getting meta tags for pages|categories|subcategories
     * @param $slug
     * @param HeaderTags $metaTags
     * @return mixed
     */
    public static function getMetaTags($slug, HeaderTags $metaTags)
    {
        // get page meta tag
        $getMetaTags = $metaTags->getPageMetaTag($slug);
        if ($getMetaTags->first()) {
            return $getMetaTags[0]->meta_tags;
        }
        // get categories meta tag
        $getCategoriesMetaTags = $metaTags->getCategoriesMetaTag($slug);
        if ($getCategoriesMetaTags->first()) {
            return $getCategoriesMetaTags[0]->meta_tags;
        }
        // get subcategories meta tag
        $getSubCategoriesMetaTags = $metaTags->getSubCategoriesMetaTag($slug);
        if ($getSubCategoriesMetaTags->first()) {
            return $getSubCategoriesMetaTags[0]->meta_tags;
        }

        $defaultPageMetaTags = $metaTags->getDefaultPageSettings(SettingsModel::$homepage, 'meta_tags');
        if (!empty($defaultPageMetaTags)) {
            return $defaultPageMetaTags;
        }
        return null;
    }

    /**
     * Gets pages meta tags
     * @param $slug
     * @return mixed
     */
    public function getPageMetaTag($slug)
    {
        return DB::table('pages')->select('page_content.meta_tags as meta_tags')
            ->leftJoin('page_content','page_content.page_id', '=', 'pages.id')
            ->where([
                'url_name' => $slug,
            ])->limit(1)->get();
    }

    /**
     * Gets categories meta tags
     * @param $slug
     * @return mixed
     */
    public function getCategoriesMetaTag($slug)
    {
        return DB::table('categories')->select('categories.meta_tags as meta_tags')
            ->where([
                'url_name' => $slug,
            ])->limit(1)->get();
    }

    /**
     * Gets categories meta tags
     * @param $slug
     * @return mixed
     */
    public function getSubCategoriesMetaTag($slug)
    {
        return DB::table('subcategories')->select('subcategories.meta_tags as meta_tags')
            ->where([
                'url_name' => $slug,
            ])->limit(1)->get();
    }

    /**
     * Get category/subcategory/page title
     * @param $slug
     * @param HeaderTags $title
     * @return string
     */
    public static function getTitle($slug, HeaderTags $title)
    {
        // get category title
        $titleCollection = $title->getCategoryTitle($slug);
        if ($titleCollection->first()) {
            return $titleCollection[0]->title;
        }

        // get subcategory title
        $titleCollection = $title->getSubcategoryTitle($slug);
        if ($titleCollection->first()) {
            return $titleCollection[0]->title;
        }

        // get page title
        $titleCollection = $title->getPageTitle($slug);
        if ($titleCollection->first()) {
            return $titleCollection[0]->title;
        }
        $defaultPageTitle = $title->getDefaultPageSettings(SettingsModel::$homepage, 'title');
        if (!empty($defaultPageTitle)) {
            return $defaultPageTitle;
        }
        return 'No Title';
    }

    /**
     * Get page/post title
     * @param $slug
     * @return mixed
     */
    public function getPageTitle($slug)
    {
        return DB::table('pages')->select('pages.title as title')
            ->where([
                'url_name' => $slug,
            ])->limit(1)->get();
    }

    /**
     * Get category title
     * @param $slug
     * @return mixed
     */
    public function getCategoryTitle($slug)
    {
        return DB::table('categories')->select('categories.name as title')
            ->where([
                'url_name' => $slug,
            ])->limit(1)->get();
    }

    /**
     * Get subcategory title
     * @param $slug
     * @return mixed
     */
    public function getSubcategoryTitle($slug)
    {
        return DB::table('subcategories')->select('subcategories.name as title')
            ->where([
                'url_name' => $slug,
            ])->limit(1)->get();
    }

    /**
     * @param string $defaultPage
     * @return string
     */
    public function getDefaultPageSettings(string $defaultPage, $type) : string
    {
        $defaultMetaTags =  DB::table('settings')->select('settings.value as value')
            ->where([
                'name' => $defaultPage,
            ])->limit(1)->get();
        return unserialize($defaultMetaTags[0]->value)[$type];
    }
}
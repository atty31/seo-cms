<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;
use DB;

/**
 * Class Scripts
 * @package App\Models\Frontend
 */
class Scripts extends Model
{
    /**
     * Check if google analytics is active or not
     * @param string $slug
     * @return mixed
     */
    public static function enableGoogleAnalyticsCode($slug)
    {
        $enableAnalytics = DB::table('pages')->select('pages.google_analytics as ganalytics')
            ->where([
                'url_name' => $slug,
            ])->get();
        return $enableAnalytics[0]->ganalytics;
    }

    /**
     * Check if facebook ads is active or not
     * @param string $slug
     * @return mixed
     */
    public static function enableGoogleAds($slug)
    {
        $enableGoogleAds = DB::table('pages')->select('pages.facebook_ads_active as fads')
            ->where([
                'url_name' => $slug,
            ])->get();
        return $enableGoogleAds[0]->fads;
    }

    /**
     * Check if google ads is active or not
     * @param string $slug
     * @return mixed
     */
    public static function enableFacebookAds($slug)
    {
        $enableFacebookAds = DB::table('pages')->select('pages.google_ads_active as gads')
            ->where([
                'url_name' => $slug,
            ])->get();
        return $enableFacebookAds[0]->gads;
    }
}
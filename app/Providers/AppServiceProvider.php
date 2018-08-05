<?php

namespace App\Providers;

use App\Models\Frontend\HeaderMenu;
use App\Models\Frontend\HeaderTags;
use App\Models\Frontend\Scripts;
use App\Models\Frontend\Settings;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Request;
use App\Models\Admin\Settings as SettingsModel;
/**
 * Class AppServiceProvider
 * @package App\Providers
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    private $scripts = [
        'google_analytics' => 1,
        'google_ads'       => 1,
        'facebook_ads'     => 1
    ];
    /**
     * @var array
     */
    private $header = [
        'header_meta_tags'  => null,
        'header_title' => null,
    ];
    /**
     * @var null
     */
    private $latestSlug = null;

    /**
     * AppServiceProvider constructor.
     * @param \Illuminate\Contracts\Foundation\Application $app
     */
    public function __construct(\Illuminate\Contracts\Foundation\Application $app)
    {
        $this->latestSlug = Request::segment(count(Request::segments()));


        parent::__construct($app);
    }

    /**
     * Add dynamic menu in the content. Add google analitycs|google adds|facebook code
     * @return void
     */
    public function boot()
    {
        //404 pages
        view()->composer('errors/404', function($view)
        {
            $view->with([
                'menuItems' => $this->getMainMenu(),
            ]);
        });

        view()->composer('frontend.layouts.main', function($view)
        {
            //todo implements functionality
            //Dynamic created pages
//                $this->scripts = [
//                    'google_analytics' => Scripts::enableGoogleAnalyticsCode($this->latestSlug),
//                    'google_ads' => Scripts::enableGoogleAds($this->latestSlug),
//                    'facebook_ads' => Scripts::enableFacebookAds($this->latestSlug)
//                ];
            $this->header = [
                'header_meta_tags'  => HeaderTags::getMetaTags($this->latestSlug, new HeaderTags()),
                'header_title' => HeaderTags::getTitle($this->latestSlug, new HeaderTags()),
            ];

            $view->with([
//                'scripts' => $this->scripts,
                'menuItems'   => $this->getMainMenu(),
                'burgerMenu'  => $this->enableBurgerMenu(),
                'leftMenu'    => $this->enableLeftMenu(),
                'footer'      => $this->getFooterSettings(),
                'header'      => $this->header,
            ]);
        });
        //
    }

    /**
     * Register any application services.
     * @return void
     */
    public function register()
    {
        //todo check if is still needed
    }

    /**
     * Get custom main menu data for all pages
     * @return array
     */
    private function getMainMenu() : array
    {
        return [
            'categories' => HeaderMenu::getCategoryPages(),
            'static'     => HeaderMenu::getStaticPages(),
        ];
    }

    /**
     * Checks if sidebar menu is enabled or not
     * @return array
     */
    private function enableBurgerMenu() : array
    {
        $leftMenu = Settings::getAppSettings(SettingsModel::$burgerMenu);
        if (empty($leftMenu)){
            $leftMenu['active'] = false;
        }
        return [
            'burgerMenu' => $leftMenu['active'],
        ];
    }
    /**
     * Checks if sidebar menu is enabled or not
     * @return array
     */
    private function enableLeftMenu() : array
    {
        $leftMenu = Settings::getAppSettings(SettingsModel::$leftMenu);
        if (empty($leftMenu)){
            $leftMenu['active'] = false;
        }
        return [
            'leftMenu' => $leftMenu['active'],
        ];
    }
    /**
     * Get footer custom settings and configurations
     * @return array
     */
    private function getFooterSettings()
    {
        $footer = Settings::getAppSettings(SettingsModel::$footer);

        if (empty($footer)) {
            $enableFooter = $type = $afterFooterContainer = $bottomFooter = false;
        }else{
            $enableFooter = $this->checkArrayKey($footer, 'active');
            $type = $this->checkArrayKey($footer, 'type');
            $afterFooterContainer = $this->checkArrayKey($footer, 'after-footer');
            $bottomFooter = $this->checkArrayKey($footer, 'bottom-footer');
        }

        return [
            'enableFooter'         => $enableFooter,
            'footerType'           => $type,
            'afterFooterContainer' => $afterFooterContainer,
            'bottomFooter'         => $bottomFooter,
        ];
    }

    /**
     * Check if a key exist or not, if not then returns false
     * @param array $footer
     * @param string $key
     * @return bool|string
     */
    public function checkArrayKey(array $footer, string $key)
    {
        return array_key_exists($key, $footer) ? (string) $footer[$key] : false;
    }
}
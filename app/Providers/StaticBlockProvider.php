<?php

namespace App\Providers;

use App\Models\Frontend\StaticBlock;
use Illuminate\Support\ServiceProvider;

/**
 * Class StaticBlockProvider
 * @package App\Providers
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class StaticBlockProvider extends ServiceProvider
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
     *
     * @return void
     */
    public function register()
    {
        //footer loading static blocks
        view()->composer('frontend.partials.footer-main', function($view)
        {
            $view->with([
                'footerLeft'   => StaticBlock::getStaticBlock(StaticBlock::FOOTER_LEFT),
                'footerRight'  => StaticBlock::getStaticBlock(StaticBlock::FOOTER_RIGHT),
                'footerCenter' => StaticBlock::getStaticBlock(StaticBlock::FOOTER_CENTER),
            ]);
        });

        view()->composer('frontend.partials.header', function($view)
        {
            $view->with([
                'topLeftHeader'   => StaticBlock::getStaticBlock(StaticBlock::HEADER_LEFT),
                'topRightHeader'  => StaticBlock::getStaticBlock(StaticBlock::HEADER_RIGHT),
                'topCenterHeader' => StaticBlock::getStaticBlock(StaticBlock::HEADER_CENTER),
                'mainHeader'      => StaticBlock::getStaticBlock(StaticBlock::HEADER_MAIN),
            ]);
        });
    }
}

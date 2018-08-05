<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StaticBlock extends Model
{
    const VISIBLE = 1;
    const HIDDEN_BLOCK = 0;

    const FOOTER_LEFT = 'footer-left';
    const FOOTER_RIGHT = 'footer-right';
    const FOOTER_CENTER = 'footer-center';
    const HEADER_LEFT = 'top-header-left-content';
    const HEADER_RIGHT = 'top-header-right-content';
    const HEADER_CENTER = 'top-header-center-content';
    const HEADER_MAIN = 'header-main';

    /**
     * Get footer type
     * @param string $type
     * @return mixed
     */
    public static function getStaticBlock(string $type)
    {
        $footerLeft = self::getBlockModelInstance()->select('blocks.content as content')
            ->where([
                'identifier' => $type,
                'status' => StaticBlock::VISIBLE,
            ])
            ->limit(1)
            ->get();
        return !empty($footerLeft[0]->content) ? $footerLeft[0]->content : '' ;
    }

    /**
     * Return instance of the blocks table
     * @return mixed
     */
    public static function getBlockModelInstance()
    {
        return DB::table('blocks');
    }
}
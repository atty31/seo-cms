<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Settings
 * @package App\Models\Admin
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class Settings extends Model
{
    //table
    protected $table = 'settings';

    /**
     * @var string
     */
    public static $footer = 'footer';

    /**
     * @var string
     */
    public static $burgerMenu = 'burger-menu';
    /**
     * @var string
     */
    public static $leftMenu = 'left-menu';
    /**
     * @var string
     */
    public static $homepage = 'homepage';
}
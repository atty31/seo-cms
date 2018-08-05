<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Blocks
 * @property string status
 * @property string content
 * @property string identifier
 * @property string type
 * @property string title
 * @property int default
 * @package App\Models\Admin
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class Blocks extends Model
{
    //table
    protected $table = 'blocks';
}

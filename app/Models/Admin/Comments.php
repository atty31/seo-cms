<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comments
 * @package App\Models\Admin
 */
class Comments extends Model
{
    const APPROVED = 1;
    const HIDDEN = 0;
    //table
    protected $table = 'comments';
}
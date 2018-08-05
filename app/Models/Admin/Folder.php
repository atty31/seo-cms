<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    //table
    protected $table = 'folders';

    public function childrens()
    {
        return $this->hasMany('App\Models\Admin\Folder', 'parent_id');
    }

    public function hasChildrens()
    {
        return count(self::all()->where('parent_id', $this->id));
    }
}

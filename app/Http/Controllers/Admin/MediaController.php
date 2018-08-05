<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Folder;
use App\Models\Admin\Image;
use DB;

class MediaController extends Controller
{
    /**
     * MediaController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * List view for images and folders
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @access public
     */
    public function index()
    {
        return view('adminlte::media/list', [
            'folders'  => Folder::all()->where('parent_id', ''),
        ]);
    }
}

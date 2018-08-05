<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
/**
 * Class HomeController
 * @package App\Http\Controllers
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class ViewCategoryController extends Controller
{
    /**
     * Create a new controller instance.
     * ViewCategoryController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @param $catId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($catId)
    {
        return view('adminlte::categories/view',  ['category_view' => $catId]);
    }
}
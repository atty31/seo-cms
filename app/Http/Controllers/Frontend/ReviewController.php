<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class ReviewController
 * @package App\Http\Controllers\Frontend
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend/pages/review');
    }
}
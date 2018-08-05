<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\App;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class BeContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $contacts = Contact::paginate(5);

        return view('adminlte::contact/list',  [
            "contactHeader" => "All Contacs Received",
            "contacts" => $contacts
        ]);
    }

    public function view($id)
    {
        $contact = Contact::find($id);

        return view('adminlte::contact/view',  [
            "contact" => $contact
        ]);
    }
}
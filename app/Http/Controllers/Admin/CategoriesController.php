<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Admin\Categories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
/**
 * Class HomeController
 * @package App\Http\Controllers
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class CategoriesController extends Controller
{
    /**
     * @var int
     */
    public static $withContent = 1;
    /**
     * @var int
     */
    public static $withoutContent = 0;
    /**
     * Create a new controller instance.
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
        $categories = DB::table('categories')->select('categories.type as ctype', 'categories.id as cid', 'categories.url_name as url_name', 'categories.meta_tags as meta_tags',
                    'categories.name as cname', 'users.name as uname', 'status', 'categories.updated_at as cupdated_at',
                    'categories.position as position')
                    ->leftJoin('users','users.id', '=', 'categories.admin_id')
                    ->paginate(10);
        return view('adminlte::categories/list',  [
            'category'   => 'List View',
            'categories' => $categories
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newCategory()
    {
        return view('adminlte::categories/new');
    }

    /**
     * Save new category in categories table
     * @param Requests\Admin\CategoryFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\Admin\CategoryFormRequest $request)
    {
        $category = new Categories();
        $category->name       = $request->input('name');
        // Get the currently authenticated user's ID...
        $category->status     = $request->input('status');
        $category->type       = $request->input('type');
        $category->url_name   = $request->input('url_name');
        $category->meta_tags  = trim($request->input('meta_tags'));
        $category->content    = $request->input('content');
        $category->admin_id   = Auth::id();
        $category->position   = Categories::all()->count() + 1;
        if($category->save()){
            $message = 'A new category was added !';
        };

        return redirect()->route('categories')->with(['msg' => $message]);
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($id)
    {
        $category = Categories::find($id);

        return view('adminlte::categories/view',  [
            'category' => $category
        ]);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        if (Categories::destroy($id)){
            $message = 'A category was deleted';
        }
        return redirect()->route('categories')->with(['delete_msg' => $message]);
    }

    /**
     * Update the specified resource in storage.
     * @param $id
     * @param Requests\Admin\CategoryFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, Requests\Admin\CategoryFormRequest $request)
    {
        $category = Categories::find($id);
        $category->name     = $request->input('name');
        $category->status   = $request->input('status');
        $category->url_name = $request->input('url_name');
        $category->content  = trim($request->input('content'));
        $category->meta_tags  = trim($request->input('meta_tags'));
        $category->admin_id = Auth::id();
        //todo add try and catch
        if($category->save()){
            $message = 'Category updated with success !';
        };

        return redirect()->route('categories')->with(['msg' => $message]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateCategoryPositions(Request $request)
    {
        $positions = $request->input('positions');
        $ids = $request->input('ids');
        $pos = array_combine($ids, $positions);
        foreach($pos as $key => $value){
            Categories::where('id', $key)->update(['position' => (int) $value ]);
        }
        $message = 'Page positions were updated with success!';
        return redirect()->route('categories')->with(['msg' => $message]);
    }
}
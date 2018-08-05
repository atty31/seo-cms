<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\Subcategories;
use App\Models\Admin\Categories;
use DB;

/**
 * Class SubcategoriesController
 * @package App\Http\Controllers\Admin
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class SubcategoriesController extends Controller
{
    /**
     * SubcategoriesController constructor.
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $subCategories = DB::table('subcategories')->select('subcategories.id as sid',
            'subcategories.name as sname', 'subcategories.url_name as url_name', 'subcategories.status as status',
            'subcategories.updated_at as screated_at', 'subcategories.updated_at as supdated_at',
            'subcategories.category_id as category_id', 'categories.name as cname')
            ->leftJoin('categories','subcategories.category_id', '=', 'categories.id')
            ->paginate(10);



        return view('adminlte::subcategories/list',  [
            'subcategory'   => 'List View',
            'subcategories' => $subCategories
        ]);
    }

    /**
     * Render new subcategory view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newSubCategory()
    {
        $categories = DB::table('categories')->get();
        return view('adminlte::subcategories/new',[
            'categories'    => $categories
        ]);
    }

    /**
     * Save new category in categories table
     * @param Requests\Admin\SubcategoryFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Requests\Admin\SubcategoryFormRequest $request)
    {
        $subcategory = new Subcategories();
        $subcategory->name        = $request->input('name');
        $subcategory->category_id = $request->input('category_id');
        $subcategory->status      = $request->input('status');
        $subcategory->type        = $request->input('type');
        $subcategory->meta_tags   = trim($request->input('meta_tags'));
        $subcategory->url_name    = $request->input('url_name');
        $subcategory->content     = $request->input('content');
        $subcategory->level       = 1;
//        $subcategory->position   = Subcategories::all()->count() + 1;
        $message = 'Unable to save.';
        try {
            if ($subcategory->save()) {
                $message = 'A new subcategory was added!';
            };
        }catch (Exception $e){
            var_dump($e->getMessage());
            //todo add logs
        }

        return redirect()->route('subcategories')->with(['msg' => $message]);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        if (Subcategories::destroy($id)){
            $message = 'A subcategory was deleted!';
        }
        return redirect()->route('subcategories')->with(['delete_msg' => $message]);
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($id)
    {
        $subcategory = Subcategories::find($id);

        return view('adminlte::subcategories/view',  [
            'subcategory' => $subcategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param int $id
     * @param Requests\Admin\SubcategoryFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, Requests\Admin\SubcategoryFormRequest $request)
    {
        $subcategory = Subcategories::find($id);
        $subcategory->name     = $request->input('name');
        $subcategory->url_name = $request->input('url_name');
        $subcategory->status   = $request->input('status');
        $subcategory->content  = trim($request->input('content'));
        $subcategory->meta_tags   = trim($request->input('meta_tags'));
        //todo add try and catch
        if($subcategory->save()){
            $message = 'Category updated with success !';
        };

        return redirect()->route('subcategories')->with(['msg' => $message]);
    }

    /**
     * Get subcategories ids and names needed for ajax request
     * @param Requests\Admin\SubcategoryFormRequest $request
     */
    public function getSubCategoryByCategoryId(Requests\Admin\SubcategoryFormRequest $request)
    {
        if ($request->isMethod('post')) {
            $getCategory = Categories::where([
                ['id',   '=', $request->input('subid')],
//                ['type', '=', CategoriesController::$withContent]
            ])->get()->first();
            if ($getCategory){
                $subCategories = Subcategories::where([
                    ['category_id', '=', $request->input('subid')]
                ])->get();
                $jsonSubCategories = [];
                foreach ($subCategories as $sub){
                    $jsonSubCategories[$sub->id] = $sub->name;
                }
                echo json_encode($jsonSubCategories);
            }
        }
    }
}
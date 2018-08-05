<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Admin\Tags;
use DB;
use App\Http\Logs\Admin\Log;
use Exception;
use Monolog\Logger;
use Illuminate\Support\Facades\Auth;

/**
 * Class TagsController
 * @package App\Http\Controllers\Admin
 * @author Attila Naghi <naghi.attila@mail.com>
 */

class TagsController extends Controller
{
    /**
     * @var string
     */
    private $logFileName = 'tags';
    /**
     * @var
     */
    private $log;
    /**
     * TagsController constructor.
     */
    public function __construct()
    {
        $this->log = new Log($this->logFileName);
        $this->middleware('auth');
    }

    /**
     * Loads tag list view page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tags = DB::table('tags')->select('tags.id as tid', 'tags.name as tname', 'tags.status as tstatus', 'categories.name as cname',
            'subcategories.name as sname', 'tags.updated_at as tupdated_at')
            ->leftJoin('categories','categories.id', '=', 'tags.category_id')
            ->leftJoin('subcategories','subcategories.id', '=', 'tags.subcategory_id')
            ->paginate(10);

        return view('adminlte::tags/list',  [
            'tags'    => $tags
        ]);
    }

    /**
     * Access add new tag view page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newTag()
    {
        $categories = DB::table('categories')->get();

        return view('adminlte::tags/new', [
            'categories' => $categories
        ]);
    }

    /**
     * Save new tag in the tags table
     * @param Requests\Admin\TagsFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\Admin\TagsFormRequest $request)
    {
        $page = new Tags();
        $page->name           = trim($request->input('name'));
        $page->category_id    = $request->input('category_id');
        $page->subcategory_id = $request->input('subcategory_id');

        try{
            $page->save();
            $message = ['msg' => 'A new tag was created!'];
            $this->log->logMessage(Logger::INFO, 'A new tag: '. $page->name.' - was created by the user with the id '.Auth::id());
        }catch(Exception $error){
            $message = ['msg_error' => $error->getMessage()];
            $this->log->logMessage(Logger::ERROR, $error->getMessage());
        }

        return redirect()->route('admin.tags')->with($message);
    }

    /**
     * Remove a tag
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try{
            Tags::destroy($id);
            $message = ['msg' => 'A tag was deleted'];
            $this->log->logMessage(Logger::INFO, 'Tag with the id '.$id.' was deleted by the user with the id '.Auth::id());
        }catch (Exception $error){
            $message = ['msg_error' => $error->getMessage()];
            $this->log->logMessage(Logger::ERROR, $error->getMessage());
        }
        return redirect()->route('admin.tags')->with($message);
    }

    /**
     * Show tag page
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function view($id)
    {
        $tag = Tags::find($id);
        $categories = DB::table('categories')->get();
        $subcategories = DB::table('subcategories')->get();

        return view('adminlte::tags/view', [
            'tag' => $tag,
            'categories' => $categories,
            'subcategories' => $subcategories,
        ]);
    }

    /**
     * Update tag information
     * @param int $id
     * @param Requests\Admin\TagsFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, Requests\Admin\TagsFormRequest $request)
    {
        $tag = Tags::find($id);
        $tag->name           = $request->input('name');
        $tag->status         = $request->input('status');
        $tag->category_id    = $request->input('category_id');
        $tag->subcategory_id = $request->input('subcategory_id');
        try {
            $tag->save();
            $message = ['msg' => 'Tag was updated with success by!'];
            $this->log->logMessage(Logger::INFO, 'Tag with the id: '.$id.' was updated with success by the user with the id '.Auth::id());

        }catch(Exception $error){
            $message = ['msg_error' => $error->getMessage()];
            $this->log->logMessage(Logger::ERROR, $error->getMessage());
        }

        return redirect()->route('admin.tags')->with($message);
    }

    /**
     * Get all tags by category id or subcategory id , depending on the type
     * @param Requests\Admin\TagsFormRequest $request
     * @return void
     */
    public function getTagsById(Requests\Admin\TagsFormRequest $request)
    {
        if ($request->isMethod('post')) {
            if ($request->input('type') == 1) { // if category type
                $getTags = Tags::where([
                    ['category_id', '=', $request->input('id')],
                ])->get();
            }else{  // if subcategory id
                $getTags = Tags::where([
                    ['subcategory_id', '=', $request->input('id')],
                ])->get();
            }
            if ($getTags){
                $jsonTags = [];
                foreach ($getTags as $tag){
                    $jsonTags[$tag->id] = $tag->name;
                }
                echo json_encode($jsonTags);
            }
        }
    }
}
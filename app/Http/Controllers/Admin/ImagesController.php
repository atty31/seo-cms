<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin\Image as ImageModel;
use File;
use DB;
use Illuminate\Support\Facades\Input;

class ImagesController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param $w
     * @param $h
     * @param $image
     * @return mixed
     */
    public function index ($w, $h, $image)
    {
        $imageFile = ImageModel::where('name', '=', $image)->first();

        return Image::make($imageFile->path)->resize($w, null, function ($constraint) {
            $constraint->aspectRatio();
        })->response();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('adminlte::media.image.create', [
            'parentId' => $request->parentId ? $request->parentId : ''
        ]);
    }

    /**
     * Uploads images in public/uploads/images
     * @param Requests\Admin\ImageFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @access public
     */
    public function store(Requests\Admin\ImageFormRequest $request)
    {
        //todo check if the condition fails
        if($request->hasFile('images')){
            $path = '/uploads/images/' . date("y") . '/' . date("m");
            Storage::makeDirectory('/public'.$path, $mode = 0777, true);

            foreach ($request->images as $image) {
                $this->addImage($image, $path, $request->input('folder_id'));
            }
        }
        return redirect('admin/folder/show/'.$request->input('folder_id'))->with(['msg' => 'Success!']);
    }

    /**
     * Save image path into images table
     * @param $file
     * @param $path
     * @retun void
     * @access protected
     */
    protected function addImage($file, $path, int $folder_id = null)
    {
        $image = new ImageModel;
        $image->name = basename($file->getClientOriginalName(), '.' . $file->getClientOriginalExtension());
        $image->user_id = Auth::id();

        $image->type = $file->getMimeType();
        $image->ext = $file->getClientOriginalExtension();
        //path to file is to a symlink directory: /storage
        $image->path = str_replace("public/","storage/",$file->store('/public'.$path));
        if ($folder_id > 0){

            $image->folder_id = $folder_id;
        }
        $image->save();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @access public
     */
    public function imagesList()
    {
        return view('adminlte::media.image.imageslist', ['images' => ImageModel::orderBy('created_at', 'desc')->get()]);
    }

    /**
     * Removes the image file and the image record from the database
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @access public
     */
    public function destroy($id) : \Illuminate\Http\RedirectResponse
    {
        $messageContent = [];
        $imageFile = ImageModel::where('id', $id)->first();
        if ($imageFile && ImageModel::find($id)->forceDelete() && File::delete(public_path().'/'.$imageFile->path)){
            $messageContent['delete_msg'] = 'The images was removed from the database and the storage folder!';
        }else{

            $messageContent['error_msg'] = 'The image was not deleted, something went wrong! Please try again later!';
        }
        return redirect()->route('admin.media')->with($messageContent);
    }
}
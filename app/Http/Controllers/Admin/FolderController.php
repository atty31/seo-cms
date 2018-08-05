<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Folder;
use DB;

class FolderController extends Controller
{

    public function index()
    {}

    public function create(Request $request)
    {
        return view('adminlte::media/folder/create', ['parentId' => $request->parentId ? $request->parentId : '']);
    }

    public function store(Requests\Admin\FolderFormRequest $request)
    {
        $folder = new Folder();

        $folder->name = $request->name;
        $folder->description = $request->description;
        $folder->user_id = Auth::id();
        if($request->parent_id) {
            $folder->parent_id = $request->parent_id ? $request->parent_id : 'null';
        }
        $folder->save();

        return redirect('/admin/media');
    }

    public function show($id)
    {
        $folder = Folder::find($id);
        $folderChildrens = Folder::find($id)->childrens;

        return view('adminlte::media.folder.show', [
            'currentFolder'   => $id,
            'folder'          => $folder,
            'folderChildrens' => $folderChildrens,
            'images'          => DB::table('images')->select('users.name as uname', 'images.path as path', 'images.id as id', 'images.name as name', 'images.alt as alt',
                'images.created_at as created_at', 'images.type as type')
                ->leftJoin('users','users.id', '=', 'images.user_id')
                ->where('images.folder_id', $id)
                ->paginate(6),
        ]);
    }

    public function edit($id)
    {
        $folder = Folder::find($id);
        $returnPath = route('admin.folder.show', ['folderId' => $folder->id]);

        if($folder->parent_id){
            $returnPath = route('admin.folder.show', ['folderId' => $folder->parent_id]);
        }

        return view('adminlte::media.folder.edit', ['folder' => $folder, 'returnPath' => $returnPath]);
    }

    public function update($id, Requests\Admin\FolderFormRequest $request)
    {
        $folder = Folder::find($id);

        $folder->name = $request->name;
        $folder->description = $request->description;
        if($request->parent_id) {
            $folder->parent_id = $request->parent_id ? $request->parent_id : 'null';
        }
        $folder->save();

        return redirect('admin/media');
    }

    public function destroy($id)
    {
        $folder = Folder::find($id);
        $folderChildrens = Folder::find($id)->childrens;

        if(count($folderChildrens) === 0) {
            $folder->delete();
        }
        return redirect('admin/media');
    }
}

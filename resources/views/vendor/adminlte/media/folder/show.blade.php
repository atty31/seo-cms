@extends('adminlte::layouts.app') @section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Folder: {{ $folder->name }}</h3>

                    <div class="box-tools">
                        <div class="actions dropdown">
                            <a class="btn btn-block btn-default btn-xs" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Actions
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dLabel">
                                <li><a href="{{ route('admin.image.create', ['parentId' => $folder->id]) }}">Add New Image</a></li>
                                <li><a href="{{ route('admin.folder.create', ['parentId' => $folder->id]) }}">Add New Folder</a></li>
                                <li><a href="{{ route('admin.folder.edit', ['folderId' => $folder->id]) }}">Edit</a></li>
                                <li><a href="{{ route('admin.folder.delete', ['folderId' => $folder->id]) }}" class="text-danger">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @if(count($folderChildrens) == 0)

                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <p class="text-muted">No sub folders.</p>
                        </div>
                    </div>

                @else

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Subfolder Name</th>
                                <th>Description</th>
                                <th>Create by</th>
                                <th>Created Date</th>
                                <th>Actions</th>
                            </tr>
                            @foreach($folderChildrens as $child)
                                <tr>
                                    <td>{{ $child->id }}</td>
                                    <td>
                                        <a href="{{ route('admin.folder.show', ['folderId' => $child->id]) }}">
                                            {{ $child->name }}
                                        </a>
                                    </td>
                                    <td>{{ $child->description }}</td>
                                    <td>{{ \App\Models\Admin\Users::find($child->user_id)->name  }}</td>
                                    <td>{{ $child->created_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.folder.show', ['folderId' => $child->id]) }}"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('admin.folder.edit', ['folderId' => $child->id]) }}"><i class="fa fa-edit"></i></a>
                                        <a
                                            @if($child->hasChildrens() === 0)
                                                href="{{ route('admin.folder.delete', ['folderId' => $child->id]) }}"
                                            @else
                                                onclick="deleteFolder(this);"
                                                title="Delete info!"
                                                body="Folder contains subfolders and files. Folder can not be deleted. Clear sub folders and files first"
                                            @endif
                                        >
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
        @include('adminlte::media.folder.list')
    </div>
@endsection
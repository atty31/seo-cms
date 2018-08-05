@extends('adminlte::layouts.app') @section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
    <div class="row" id="media-list">
        @if(session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
            </div>
        @endif
        @if(session()->has('delete_msg'))
            <div class="alert alert-info">
                {{ session()->get('delete_msg') }}
            </div>
        @endif
            @if(session()->has('error_msg'))
                <div class="alert alert-danger">
                    {{ session()->get('error_msg') }}
                </div>
            @endif
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Media Folders</h3>
                    <div class="pull-right">
                        <button type="button" class="btn btn-success pull-right" onclick="window.location='{{ url("admin/folder/create") }}'">Add New Folder</button>
                    </div>
                </div>
                <div class="box-body">
                    @foreach($folders as $folder)
                        <a href="{{ route('admin.folder.show', ['folderId' => $folder->id]) }}" class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="{{ $folder->description }}">
                            <i class="fa fa-folder"></i>
                            <div>{{ $folder->name }}</div>
                        </a>
                    @endforeach
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
@extends('adminlte::layouts.app') @section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Folder</h3>
                </div>

                @include('adminlte::errors.errors')

                <form role="form" method="post" action="/admin/folder/update/{{ $folder->id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @if($folder->parent_id)
                        <input type="hidden" name="parent_id" value="{{ $folder->parent_id }}">
                    @endif
                    <div class="box-body">
                        <div class="form-group">
                            <label for="folder-name">Name</label>
                            <input type="text" name="name" class="form-control" id="folder-name" placeholder="Enter folder name..." value="{{ $folder->name }}">
                        </div>
                        <div class="form-group">
                            <label for="folder-description">Description</label>
                            <textarea class="form-control" name="description" id="folder-description" placeholder="Enter folder description...">{{ $folder->description }}</textarea>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-default pull-right" onclick="window.location='{{ $returnPath }}'">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
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

                <form role="form" method="post" action="/admin/folder">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @if($parentId)
                        <input type="hidden" name="parent_id" value="{{ $parentId }}">
                    @endif
                    <div class="box-body">
                        <div class="form-group">
                            <label for="folder-name">Name</label>
                            <input type="text" name="name" class="form-control" id="folder-name" placeholder="Enter folder name...">
                        </div>
                        <div class="form-group">
                            <label for="folder-description">Description</label>
                            <textarea class="form-control" name="description" id="folder-description" placeholder="Enter folder description..."></textarea>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <button type="button" class="btn btn-default pull-right" onclick="window.location='{{ url("admin/media") }}'">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
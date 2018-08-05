@extends('adminlte::layouts.app') @section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
    <div class="row" id="images-upload">
        <div class="col-xs-12 col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add New Image</h3>
                </div>

                @include('adminlte::errors.errors')

                @if(session()->has('msg'))
                    <div class="alert alert-error">
                        {{ session()->get('msg') }}
                    </div>
                @endif

                <form role="form" method="post" action="/admin/image/store" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="folder_id" value="{{ app('request')->input('folder') }}">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-4">
                                    <label for="image-file">Upload Image</label>
                                    <input type="file" name="images[]" id="image-file" multiple="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <ul class="products-list product-list-in-box file-list"></ul>
                        </div>

                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
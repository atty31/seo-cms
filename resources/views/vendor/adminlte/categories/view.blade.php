@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <form action="{{ route('category.update', ['categoryId' => $category->id]) }}" method="POST" name="update_category" id="category_form">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="panel panel-default">
                            <div class="panel-heading">Category Details</div>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="panel-body">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">ID:</label>
                                    <div class="col-lg-8">
                                        {{ $category->id }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Name:</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="name" id="name" value="{{ $category->name }}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Url name:</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="url_name" id="url_name" value="{{ $category->url_name }}"/>
                                    </div>
                                </div>
                                @if ( $category->type == 1)
                                    <div class="form-group row content_update">
                                        <label class="col-lg-3 control-label">Category content:</label>
                                        <div class="col-lg-9">
                                            <textarea id="category_content" rows="16" cols="50" id="content" name="content" placeholder="category content description">{{ $category->content }}</textarea>
                                        </div>
                                    </div>
                                @endif
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Status:</label>
                                    <div class="col-lg-8">
                                        <select id="status" name="status">
                                            <option value ="1"  @if ($category->status == '1') selected="selected" @endif >Visible</option>
                                            <option value ="0"  @if ($category->status == '0') selected="selected" @endif >Hidden</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Created at:</label>
                                    <div class="col-lg-8">
                                        {{ $category->created_at }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Updated at:</label>
                                    <div class="col-lg-8">
                                        {{ $category->updated_at }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box-danger">
                        <div class="panel panel-default">
                            <div class="panel-heading">Actions</div>
                            <div class="box-body">
                                <a class="btn btn-default" href ="{{ url('/') }}/{{ Configurations::getAdminUrl() }}/categories">Back</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i>Update</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="panel panel-default">
                            <div class="panel-heading">Category Meta Tags</div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group row">
                                <label class="col-lg-3 control-label">Meta tags:</label>
                                <div class="col-lg-8">
                                    <textarea class="form-control" row="4" rows="10%" id="category_metatags" name="meta_tags" placeholder="category meta tags">{{ $category->meta_tags }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

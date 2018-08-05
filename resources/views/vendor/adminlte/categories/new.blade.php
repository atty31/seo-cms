@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <form class="form-horizontal" method="POST" action="{{ route('categories.store') }}" id ="category_form">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="panel panel-default">
                            <div class="panel-heading">Add new category</div>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="box-body">
                                <select id="type" name="type">
                                    <option value ="-1">Select type</option>
                                    <option value ="1">With content</option>
                                    <option value ="0">Without content</option>
                                </select>
                            </div>
                            <div class="box-body">
                                <label class="control-label">Name:</label>
                                <input class="form-control" id="name" name="name" placeholder="category name" type="text">
                            </div>
                            <div class="box-body url_name">
                                <label class="control-label">Url Name:</label>
                                <input class="form-control" id="url_name" name="url_name" placeholder="url name" type="text">
                            </div>
                            <div class="box-body content hidden">
                                <label class="control-label">Category content:</label>
                                <textarea id="category_content" rows="16" cols="50" name="content" placeholder="category content description"></textarea>
                            </div>
                            <div class="box-body">
                                <select id="status" name="status">
                                    <option value ="-1">Select status</option>
                                    <option value ="1">Visible</option>
                                    <option value ="0">Hidden</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box box-danger">
                        <div class="panel panel-default">
                            <div class="panel-heading">Actions</div>
                            <div class="box-body">
                                <a class="btn btn-default" href ="{{ url('/') }}/{{ Configurations::getAdminUrl() }}/categories">Back</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i>Save
                                </button>
                                <input class="btn btn-default" value="Cancel" type="reset">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="panel panel-default">
                            <div class="panel-heading">Add category meta tag</div>
                            <div class="box-body">
                                <div class="form-group col-md-12">
                                    <label>Meta Tags:</label>
                                    <textarea class="form-control" row="4" rows="10%" id="category_metatags" name="meta_tags" placeholder="category meta tags"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
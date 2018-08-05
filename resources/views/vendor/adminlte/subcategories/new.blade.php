@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Add new subcategory</div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="{{ route('subcategories.store') }}" id ="subcategory_form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Type:</label>
                            <div class="col-lg-10">
                                <select id="type" name="type">
                                    <option value ="-1">Select type</option>
                                    <option value ="1">With content</option>
                                    <option value ="0">Without content</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Select category:</label>
                            <div class="col-lg-10">
                                <select id="category_id" name="category_id">
                                    <option value ="-1">Select category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="name" name="name" placeholder="subcategory name" type="text">
                            </div>
                        </div>
                        <div class="form-group url_name">
                            <label class="col-lg-2 control-label">Url Name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="url_name" name="url_name" placeholder="url name" type="text">
                            </div>
                        </div>
                        <div class="form-group content hidden">
                            <label class="col-lg-2 control-label">Subcategory content:</label>
                            <div class="col-lg-8">
                                <textarea id="subcategory_content" rows="16" cols="50" id="content" name="content" placeholder="subcategory content description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Status:</label>
                            <div class="col-lg-8">
                                <select id="status" name="status">
                                    <option value ="-1">Select status</option>
                                    <option value ="1">Visible</option>
                                    <option value ="0">Hidden</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-10">
                                <a class="btn btn-default" href ="{{ url('/') }}/{{ Configurations::getAdminUrl() }}/categories">Back</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i>Save
                                </button>
                                <span></span>
                                <input class="btn btn-default" value="Cancel" type="reset">
                            </div>
                        </div>
                    </form>

                    <div class="panel-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

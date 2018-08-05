@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <form class="form-horizontal" method="POST" action="{{ route('tags.store') }}" id ="tag_form">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="panel panel-default">
                            <div class="panel-heading">Add new tag</div>
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
                                <label class="control-label">Name:</label>
                                <input class="form-control" id="name" name="name" placeholder="tag name" type="text">
                            </div>
                            <div class="box-body">
                                <select id="status" name="status">
                                    <option value ="-1">Select status</option>
                                    <option value ="1">Enable</option>
                                    <option value ="0">Disable</option>
                                </select>
                            </div>
                            <div class="box-body">
                                <select name="category_id" id="category_id">
                                    <option value="-1">Select a category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="box-body subcategory_id hidden">
                                <select name="subcategory_id" id="subcategory_id">
                                    <option value="-1">Select a subcategory</option>
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
            </div>
        </form>
    </div>
@endsection
@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <form action="{{ route('tag.update', ['tagId' => $tag->id]) }}" method="POST" id="tag_form">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="panel panel-default">
                            <div class="panel-heading">Tag Details</div>
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
                                        {{ $tag->id }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Name:</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="name" id="name" value="{{ $tag->name }}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Status:</label>
                                    <div class="col-lg-8">
                                        <select id="status" name="status">
                                            <option value ="1" @if ($tag->status == '1') selected="selected" @endif >Visible</option>
                                            <option value ="0" @if ($tag->status == '0') selected="selected" @endif >Hidden</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Select a category</label>
                                    <div class="col-lg-8">
                                        <select name="category_id" id="category_id">
                                            @foreach($categories as $category)
                                                <option @if ($tag->category_id == $category->id )  selected="selected" @endif value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Select a subcategory</label>
                                    <div class="col-lg-8">
                                        <select name="subcategory_id" id="subcategory_id">
                                            <option value="-1"  @if ($tag->subcategory_id || $tag->subcategory_id == 0) selected="selected" @endif >None</option>
                                            @foreach($subcategories as $subcategory)
                                                <option @if ($tag->subcategory_id == $subcategory->id )  selected="selected" @endif value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Created at:</label>
                                    <div class="col-lg-8">
                                        {{ $tag->created_at }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Updated at:</label>
                                    <div class="col-lg-8">
                                        {{ $tag->updated_at }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box-danger">
                        <div class="panel panel-default">
                            <div class="panel-heading">Actions</div>
                            <div class="box-body">
                                <a class="btn btn-default" href ="{{ url('/') }}/{{ Configurations::getAdminUrl() }}/tags">Back</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i>Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

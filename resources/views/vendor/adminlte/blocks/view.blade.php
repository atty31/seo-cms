@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <form action="{{ route('block.update', ['blockId' => $block->id]) }}" method="POST" name="update_category" id="category_form">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="panel panel-default">
                            <div class="panel-heading">View Block @if ($block->default == '1') - Default @endif </div>
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
                            <input type="hidden" name="default" value="{{ $block->default }}">
                            <div class="box-body">
                                <label class="control-label">Type:</label>
                                <input value="{{ $block->type }}" class="form-control" id="block_type" @if ($block->default == '1') readonly @else name="type" @endif placeholder="type" type="text">
                            </div>
                            <div class="box-body">
                                <label class="control-label">Title:</label>
                                <input value="{{ $block->title }}"class="form-control" id="title" name="title" placeholder="title" type="text">
                            </div>
                            <div class="box-body url_name">
                                <label class="control-label">Identifier:</label>
                                <input value="{{ $block->identifier }}" class="form-control" @if ($block->default == '1') readonly @else name="identifier" @endif id="identifier"  placeholder="identifier" type="text">
                            </div>
                            <div class="box-body">
                                <select id="status" name="status">
                                    <option  @if ($block->status == '-1') selected="selected" @endif value ="-1">Select status</option>
                                    <option  @if ($block->status == '1') selected="selected" @endif value ="1">Visible</option>
                                    <option  @if ($block->status == '0') selected="selected" @endif value ="0">Hidden</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box box-danger">
                        <div class="panel panel-default">
                            <div class="panel-heading">Actions</div>
                            <div class="box-body">
                                <a class="btn btn-default" href ="{{ url('/') }}/{{ Configurations::getAdminUrl() }}/blocks">Back</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i>Update
                                </button>
                                <input class="btn btn-default" value="Cancel" type="reset">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="panel panel-default">
                            <div class="panel-heading">Update block content</div>
                            <div class="box-body">
                                <div class="form-group col-md-12">
                                    <label>Block content:</label>
                                    <textarea class="form-control" row="4" rows="10%" id="block_content" name="content" placeholder="block content">{{ $block->content }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <form class="form-horizontal" method="POST" action="{{ route('block.store') }}" id ="block_form">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="panel panel-default">
                            <div class="panel-heading">Add new block</div>
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
                                <label class="control-label">Type:</label>
                                <input class="form-control" id="block_type" name="type" placeholder="type" type="text">
                            </div>
                            <div class="box-body">
                                <label class="control-label">Title:</label>
                                <input class="form-control" id="title" name="title" placeholder="title" type="text">
                            </div>
                            <div class="box-body url_name">
                                <label class="control-label">Identifier:</label>
                                <input class="form-control" id="identifier" name="identifier" placeholder="identifier" type="text">
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
                                <a class="btn btn-default" href ="{{ url('/') }}/{{ Configurations::getAdminUrl() }}/blocks">Back</a>
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
                            <div class="panel-heading">Add block content</div>
                            <div class="box-body">
                                <div class="form-group col-md-12">
                                    <label>Block content:</label>
                                    <textarea class="form-control" row="4" rows="10%" id="block_content" name="content" placeholder="block content"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
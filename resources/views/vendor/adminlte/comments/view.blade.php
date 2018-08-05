@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <form action="{{ route('comment.update', ['comment' => $comment->cid]) }}" method="POST" name="update_comment" id="comment_form">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="panel panel-default">
                            <div class="panel-heading">Comment details</div>
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
                                        {{ $comment->cid }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Page title:</label>
                                    <div class="col-lg-8">
                                        <a href ="{{ url('/') }}/{{ Configurations::getAdminUrl() }}/pages/id/{{ $comment->pid }}">{{ $comment->ptitle }}</a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Author:</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="name" id="name" value="{{ $comment->author }}"/>
                                    </div>
                                </div>
                                <div class="form-group row content_update">
                                    <label class="col-lg-3 control-label">Description:</label>
                                    <div class="col-lg-9">
                                        <textarea id="comment_description" rows="16" cols="50" id="description" name="description" placeholder="comment description">{{ $comment->description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Status:</label>
                                    <div class="col-lg-8">
                                        <select id="status" name="status">
                                            <option value ="1"  @if ($comment->status == '1') selected="selected" @endif >Visible</option>
                                            <option value ="0"  @if ($comment->status == '0') selected="selected" @endif >Hidden</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Created at:</label>
                                    <div class="col-lg-8">
                                        {{ $comment->created_at }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Updated at:</label>
                                    <div class="col-lg-8">
                                        {{ $comment->updated_at }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box-danger">
                        <div class="panel panel-default">
                            <div class="panel-heading">Actions</div>
                            <div class="box-body">
                                <a class="btn btn-default" href ="{{ url('/') }}/{{ Configurations::getAdminUrl() }}/comments">Back</a>
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

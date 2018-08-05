@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
    <div class="col-md-12">
        @if(session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
            </div>
        @endif
        @if(session()->has('msg_error'))
            <div class="alert alert-danger">
                {{ session()->get('msg_error') }}
            </div>
        @endif
        <form class="form-horizontal" method="POST" action="{{ route('homepage-update', ['name' => $homepage_name ]) }}" id="menu-settings">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="box-body col-md-12">
                    <label class="control-label">Title:</label><br>
                    <input class="form-control" id="title" name="title" placeholder="title" type="text" value="@if (!empty($header['title'])){{ $header['title'] }} @endif">
                </div>
            </div>

            <div class="row">
                <div class="box-body col-md-12">
                    <label class="control-label">Meta Tags:</label><br>
                    <textarea rows="10" cols="120" name="meta_tags">@if (!empty($header['title'])) {{ $header['meta_tags'] }} @endif</textarea>
                </div>
            </div>
            <div class="row">
                <div class="box-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">Actions</div>
                        <div class="box-body">
                            <div class="tab-pane" id="5a">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i>Update
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
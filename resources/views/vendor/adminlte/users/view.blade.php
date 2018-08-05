@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">User Profile</div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session()->has('msg'))
                        <div class="alert alert-success">
                            {{ session()->get('msg') }}
                        </div>
                    @endif
                    <div class="panel-body">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <form action="{{ route('user.update', ['userid' => $user->id]) }}" method="POST" name="update_user" id="update_user">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">ID:</label>
                                    <div class="col-lg-8">
                                        {{ $user->id }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Name:</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="name" value="{{ $user->name }}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Email:</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="email" value="{{ $user->email }}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Created at:</label>
                                    <div class="col-lg-8">
                                        {{ $user->created_at }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label">Updated at:</label>
                                    <div class="col-lg-8">
                                        {{ $user->updated_at }}
                                    </div>
                                </div>
                                <div class="form-group row-fluid">
                                    <a class="btn btn-default" href ="{{ url('/') }}/{{ Configurations::getAdminUrl() }}">Back</a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn"></i>Update</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <form action="{{ route('user.upload', ['userid' => $user->id]) }}" method="POST" name="upload_avatar" id="upload_avatar" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if (!$user->avatar)
                                    <p>No avatar</p>
                                @else
                                    <img height="200" width="250" src="{{ url('/') }}{{ $user->avatar }}" alt="avatar">
                                @endif
                                <input type="file" name="avatar" id="fileToUpload">
                                <div class="form-group row-fluid">
                                    <a class="btn btn-default" href ="{{ url('/') }}/{{ Configurations::getAdminUrl() }}">Back</a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn"></i>Update</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="panel-heading">Update account password</div>
                    <div class="panel-body">
                        <form action="{{ route('user.update_password') }}" method="POST" name="update_user_password" id="update_user_password">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group row">
                                <label class="col-lg-3 control-label">Current Password:</label>
                                <div class="col-lg-8">
                                    <input type="password" name="current-password" placeholder="Password"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 control-label">New Password:</label>
                                <div class="col-lg-8">
                                    <input type="password" name="password" placeholder="Password"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 control-label">Confirm New Password:</label>
                                <div class="col-lg-8">
                                    <input type="password" name="password_confirmation" placeholder="Re-enter Password"/>
                                </div>
                            </div>
                            <div class="form-group row-fluid">
                                <a class="btn btn-default" href ="{{ url('/') }}/{{ Configurations::getAdminUrl() }}/">Back</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i>Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

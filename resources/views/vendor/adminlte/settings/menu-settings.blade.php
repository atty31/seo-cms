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
        <form class="form-horizontal" method="POST" action="{{ route('menu-settings-update', ['name' => $nameParams ]) }}" id="menu-settings">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="box-body col-md-12">
                    <input id="enableBurgerMenu" type="checkbox" name="burger-menu_active" value="1" @if (!empty($burger_menu['active'])) checked @endif>
                    <label>Enable/Disable burger menu</label>
                </div>
            </div>
            <div class="row">
                <div class="box-body col-md-12">
                    <input id="enableLeftMenu" type="checkbox" name="left-menu_active" value="1" @if (!empty($left_menu['active'])) checked @endif>
                    <label>Enable/Disable left menu</label>
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
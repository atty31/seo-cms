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
        <form class="form-horizontal" method="POST" action="{{ route('settings.footer', ['name' => $footer_name ]) }}" id="footer_form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="box-body col-md-12">
                <input id="enableFooter" name="footer_active" type="checkbox" value="1" @if (!empty($footer['active'])) checked @endif>
                <label>Enable/Disable footer</label>
                </div>
            </div>
            <div class="row">
                <div class="box-body col-md-12">
                    <select name="footer_type" id="footer_type">
                        <option value="-1">Select footer type</option>
                        <option value="1" @if ($footer['type'] == 1) selected="selected" @endif>1column</option>
                        <option value="2" @if ($footer['type'] == 2) selected="selected" @endif>2columns</option>
                        <option value="3" @if ($footer['type'] == 3) selected="selected" @endif>3columns</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="box-body col-md-12">
                    <input id="enableAfterFooter" name="footer_after-footer" type="checkbox" value="1" @if (!empty($footer['after-footer'])) checked @endif>
                    <label>Enable/Disable after footer</label>
                </div>
            </div>
            <div class="row">
                <div class="box-body col-md-12">
                    <input id="enableBottomFooter" name="footer_bottom-footer" type="checkbox" value="1" @if (!empty($footer['bottom-footer'])) checked @endif>
                    <label>Enable/Disable bottom footer</label>
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
@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Message from  {{ $contact->name }}</div>

                    <div class="panel-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

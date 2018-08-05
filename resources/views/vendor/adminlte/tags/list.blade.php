@extends('adminlte::layouts.app') @section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Tags List</div>
                    @if(session()->has('msg'))
                        <div class="alert alert-success">
                            {{ session()->get('msg') }}
                        </div>
                    @endif
                    @if(session()->has('delete_msg'))
                        <div class="alert alert-info">
                            {{ session()->get('delete_msg') }}
                        </div>
                    @endif
                    @if(session()->has('msg_error'))
                        <div class="alert alert-danger">
                            {{ session()->get('msg_error') }}
                        </div>
                    @endif
                    <a class="btn btn-default" href="{{ route('tags.new') }}">Add new tag</a>
                    <div class="table-responsive mailbox-messages">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <table id="tag_list" class="table table-hover table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category Name</th>
                                    <th>Subcategory Name</th>
                                    <th>Status</th>
                                    <th>Changed On</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tags as $tag)
                                    <tr class="item">
                                        <td>{{$tag->tid}}</td>
                                        <td>{{$tag->tname}}</td>
                                        <td>{{$tag->cname}}</td>
                                        <td>{{$tag->sname}}</td>
                                        <td>
                                            @if ($tag->tstatus == '1')
                                                Visible
                                            @else
                                                Hidden
                                            @endif
                                        </td>
                                        <td>{{$tag->tupdated_at}}</td>
                                        <td>
                                            <a href="{{ route('tag.view', ['tagId' => $tag->tid]) }}">
                                                <i class="fa fa-eye"></i></a>
                                            <a href="{{ route('tag.delete', ['tagId' => $tag->tid]) }}">
                                                <i class="fa fa-remove"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-body">
                        {{ $tags->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
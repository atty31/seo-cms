@extends('adminlte::layouts.app')
@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <div class="panel-heading">{{$comments_title}}</div>
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
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Author</th>
                                <th>Description</th>
                                <th>Page title</th>
                                <th>Status</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comments as $comment)
                                <tr>
                                    <td>{{$comment->cid}}</td>
                                    <td>{{$comment->author}}</td>
                                    <td width="300">{{$comment->description}}</td>
                                    <td><a href ="{{ url('/') }}/{{ Configurations::getAdminUrl() }}/pages/id/{{ $comment->pid }}">{{ $comment->ptitle }}</a></td>
                                    <td>@if ($comment->status == '1')
                                            Visible
                                        @else
                                            Hidden
                                        @endif</td>
                                    <td>{{$comment->created_at}}</td>
                                    <td>
                                        <a href="{{ route('comment.view', ['commentId' => $comment->cid]) }}">
                                            <i class="fa fa-eye"></i></a>
                                        <a href="{{ route('comment.delete', ['commentId' => $comment->cid]) }}">
                                            <i class="fa fa-remove"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$pages}}</div>
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
                    <a class="btn btn-default" href="{{ route('pages.new') }}">Add new page</a>
                    <div class="table-responsive mailbox-messages">
                        <table id="pages_list" class="table table-hover table-striped">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Url name</th>
                                <th>Status</th>
                                <th>Static/Category</th>
                                <th>Subcategory</th>
                                <th>Created by</th>
                                <th>Changed on</th>
                                <th>Actions</th>
                            </tr>
                            @foreach($pages as $page)
                                <tr>
                                    <td>{{$page->pid}}</td>
                                    <td>{{$page->ptitle}}</td>
                                    <td>{{$page->purl_name}}</td>
                                    <td>
                                        @if ($page->pstatus == '1')
                                            Visible
                                        @else
                                            Hidden
                                        @endif
                                    </td>
                                    <td>
                                        @if ($page->pstatic == '0')
                                            Category - {{$page->cname}}
                                        @else
                                            Static
                                        @endif
                                    </td>
                                    <td>
                                        @if (empty($page->subcategory_name))
                                            -
                                        @else
                                            {{$page->subcategory_name}}
                                        @endif
                                    </td>
                                    <td>{{$page->pname}}</td>
                                    <td>{{$page->pupdated_at}}</td>
                                    <td>
                                        <a href="{{ route('page.view', ['pageId' => $page->pid]) }}"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('page.delete', ['pageId' => $page->pid]) }}"><i class="fa fa-remove"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="panel-body">
                        {{ $pages->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

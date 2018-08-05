@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$page_type}}</div>
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
                        <form method="post" action="{{ route('page.positions') }}" id="page-position">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="page-type" value="categories">
                            <table id="category_pages_list" class="table table-hover table-striped">
                                <thead>
                                    <tr class="first-row">
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Url name</th>
                                        <th>Status</th>
                                        <th>Static/Category</th>
                                        <th>Created By</th>
                                        <th>Changed On</th>
                                        <th>Actions</th>
                                        <th title="Menu Position">Position</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pages as $page)
                                        <tr class="item">
                                            <td>{{$page->pid}}</td>
                                            <td>{{$page->title}}</td>
                                            <td>{{$page->purl_name}}</td>
                                            <td>
                                                @if ($page->pstatus == '1')
                                                    Visible
                                                @else
                                                    Hidden
                                                @endif
                                            </td>
                                            <td>
                                                @if ($page->pstatic == '1')
                                                    Category - {{$page->cname}}
                                                @else
                                                    Static
                                                @endif
                                            </td>
                                            <td>{{$page->pname}}</td>
                                            <td>{{$page->pupdated_at}}</td>
                                            <td>
                                                <a href="{{ route('page.view', ['pageId' => $page->pid]) }}"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('page.delete', ['pageId' => $page->pid]) }}"><i class="fa fa-remove"></i></a>
                                            </td>
                                            <td class="sort">
                                                <input type="hidden" value="{{$page->pid}}" name="ids[]" class="page-id">
                                                <input type="hidden" value="{{$page->position}}" name="positions[]" class="page-position">
                                                <span>{{$page->position}}</span>
                                                <span class="up fa fa-arrow-up"></span>
                                                <span class="down fa fa-arrow-down"></span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                @if (count($pages) > 0)
                                <tfoot>
                                    <tr>
                                        <td style="border:0px">
                                            <button type="submit" class="btn btn-primary" title="Update menu items positions">
                                                <i class="fa fa-btn"></i>Update positions
                                            </button>
                                        </td>
                                    </tr>
                                </tfoot>
                                @endif
                            </table>
                        </form>
                    </div>
                    <div class="panel-body">
                        {{ $pages->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

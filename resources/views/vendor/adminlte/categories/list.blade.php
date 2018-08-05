@extends('adminlte::layouts.app') @section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Category List</div>
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
                    <a class="btn btn-default" href="{{ route('categories.new') }}">Add new Category</a>
                    <div class="table-responsive mailbox-messages">
                        <form method="post" action="{{ route('categories.positions') }}" id="category-position">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <table id="category_list" class="table table-hover table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Url name</th>
                                        <th>Status</th>
                                        <th>Type</th>
                                        <th>Created By</th>
                                        <th>Changed On</th>
                                        <th>Actions</th>
                                        <th title="Menu Position">Position</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                        <tr class="item">
                                            <td>{{$category->cid}}</td>
                                            <td>{{$category->cname}}</td>
                                            <td>{{$category->url_name}}</td>
                                            <td>
                                                @if ($category->status == '1')
                                                    Visible
                                                @else
                                                    Hidden
                                                @endif
                                            </td>
                                            <td>
                                                @if ($category->ctype == '1')
                                                    With Content
                                                @else
                                                    Without Content
                                                @endif
                                            </td>
                                            <td>{{$category->uname}}</td>
                                            <td>{{$category->cupdated_at}}</td>
                                            <td>
                                                <a href="{{ route('category.view', ['categoryId' => $category->cid]) }}">
                                                    <i class="fa fa-eye"></i></a>
                                                <a href="{{ route('category.delete', ['categoryId' => $category->cid]) }}">
                                                    <i class="fa fa-remove"></i></a>
                                            </td>
                                            <td class="sort">
                                                <input type="hidden" value="{{$category->cid}}" name="ids[]" class="page-id">
                                                <input type="hidden" value="{{$category->position}}" name="positions[]" class="page-position">
                                                <span>{{$category->position}}</span>
                                                <span class="up fa fa-arrow-up"></span>
                                                <span class="down fa fa-arrow-down"></span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                @if (count($categories) > 0)
                                    <tfoot>
                                        <tr>
                                            <td>
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
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
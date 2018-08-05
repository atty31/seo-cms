@extends('adminlte::layouts.app') @section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Subcategory List</div>
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
                    <a class="btn btn-default" href="{{ route('subcategories.new') }}">Add new subategory</a>
                    <div class="table-responsive mailbox-messages">
                        <form method="post" action="{{ route('subcategories.positions') }}" id="category-position">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <table id="category_list" class="table table-hover table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Url Name</th>
                                        <th>Category Name</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Actions</th>
                                        <th title="Menu Position">Position</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($subcategories as $subcategory)
                                        <tr class="item">
                                            <td>{{$subcategory->sid}}</td>
                                            <td>{{$subcategory->sname}}</td>
                                            <td>
                                                @if ($subcategory->status == '1')
                                                    Visible
                                                @else
                                                    Hidden
                                                @endif
                                            </td>
                                            <td>{{$subcategory->url_name}}</td>
                                            <td>{{$subcategory->cname}}</td>
                                            <td>{{$subcategory->screated_at}}</td>
                                            <td>{{$subcategory->supdated_at}}</td>
                                            <td>
                                                <a href="{{ route('subcategory.view', ['subCategoryId' => $subcategory->sid]) }}">
                                                    <i class="fa fa-eye"></i></a>
                                                <a href="{{ route('subcategory.delete', ['subCategoryId' => $subcategory->sid]) }}">
                                                    <i class="fa fa-remove"></i></a>
                                            </td>
                                            <td class="sort">
                                                <input type="hidden" value="{{$subcategory->sid}}" name="ids[]" class="page-id">
                                                {{--<input type="hidden" value="{{$subcategory->position}}" name="positions[]" class="page-position">--}}
                                                {{--<span>{{$subcategory->position}}</span>--}}
                                                <span class="up fa fa-arrow-up"></span>
                                                <span class="down fa fa-arrow-down"></span>
                                            </td>
                                            {{--<td>Todo:position</td>--}}
                                        </tr>
                                    @endforeach
                                </tbody>
                                @if (count($subcategories) > 0)
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
                        {{ $subcategories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
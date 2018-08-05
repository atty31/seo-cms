@extends('adminlte::layouts.app') @section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Block list</div>
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
                    <a class="btn btn-default" href="{{ route('block.new') }}">Add new block</a>
                    <div class="table-responsive mailbox-messages">
                        <table id="block_list" class="table table-hover table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Identifier</th>
                                    <th>Status</th>
                                    <th>Type</th>
                                    <th>Default</th>
                                    <th>Changed On</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blocks as $block)
                                    <tr class="item">
                                        <td>{{$block->id}}</td>
                                        <td>{{$block->title}}</td>
                                        <td>{{$block->identifier}}</td>
                                        <td>
                                            @if ($block->status == '1')
                                                Visible
                                            @else
                                                Hidden
                                            @endif
                                        </td>
                                        <td>{{$block->type}}</td>
                                        <td>
                                            @if ($block->default == '1')
                                                Yes
                                            @else
                                                No
                                            @endif
                                        </td>
                                        <td>{{$block->updated_at}}</td>
                                        <td>
                                            <a href="{{ route('block.view', ['blockId' => $block->id]) }}">
                                                <i class="fa fa-eye"></i></a>
                                            @if ($block->default != '1')
                                            <a href="{{ route('block.delete', ['blockId' => $block->id]) }}">
                                                <i class="fa fa-remove"></i>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-body">
                        {{ $blocks->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
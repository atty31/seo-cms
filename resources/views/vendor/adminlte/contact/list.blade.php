@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.messagesdash') }}
@endsection

@section('contentheader_title')
    {{ trans('adminlte_lang::message.messagesdash') }}
@endsection

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            @if(count($contacts) > 0)
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$contactHeader}}</h3>
                        <div class="box-tools">{{$contacts->links('vendor.pagination.bootstrap-4')}}</div>
                    </div>
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th></th>
                            </tr>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$contact->id}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{str_limit($contact->message, 60, '...')}}</td>
                                    <td><a href="{{ route('be.contact.view', ['contactId' => $contact->id]) }}"><i class="fa fa-eye"></i></a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            @else
                <div class="callout callout-info">
                    No messages from contact form received.
                </div>
            @endif
        </div>
    </div>
@endsection

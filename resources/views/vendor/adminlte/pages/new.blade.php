@extends('adminlte::layouts.app')

@section('htmlheader_title', trans('adminlte_lang::message.posts'))
@section('contentheader_title', trans('adminlte_lang::message.posts'))
@section('contentheader_description', '(Add new post)')

@section('main-content')
        <form class="form-horizontal" method="POST" action="{{ route('pages.store') }}" id="page_form">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-default">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div id="exTab1" class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">Overview</a></li>
                                <li><a href="#tab2" data-toggle="tab">Description</a></li>
                                <li><a href="#tab3" data-toggle="tab">Media</a></li>
                                <li><a href="#tab4" data-toggle="tab">MetaTags</a></li>
                                <li><a href="#tab5" data-toggle="tab">Scripts</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <div class="row">
                                        <div class="box-body col-md-6">
                                            <label class="control-label">Title:</label>
                                            <input class="form-control" id="title" name="title" placeholder="title" type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="box-body col-md-6">
                                            <label class="control-label">Url Name:</label>
                                            <input class="form-control" id="url_name" name="url_name" placeholder="url name" type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="box-body col-md-6">
                                            <select name="enable_comments" id="enable_comments">
                                                <option value="-1">Comments</option>
                                                <option value="1">Enable</option>
                                                <option value="0">Disable</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="box-body col-md-6">
                                            <select name="is_static" id="is_static">
                                                <option value="-1">Select type</option>
                                                <option value="1">Static</option>
                                                <option value="0">Category</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row category_id hidden">
                                        <div class="box-body col-md-6">
                                            <select name="category_id" id="category_id">
                                                <option value="-1">Select a category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row subcategory_id hidden">
                                        <div class="box-body col-md-6">
                                            <select name="subcategory_id" id="subcategory_id">
                                                <option value="-1">Select a subcategory</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="box-body col-md-6">
                                            <select name="is_active" id="is_active">
                                                <option value="-1">Select status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="box-body">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">Actions</div>
                                                <div class="box-body">
                                                    <div class="tab-pane active" id="1a">
                                                        <a class="btn btn-primary btnNext">Next</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <div class="row">
                                        <div class="box-body col-md-6">
                                            <select name="page_cols" id="page_cols">
                                                <option value="-1">Page type</option>
                                                <option value="0">1 column</option>
                                                <option value="1">2 columns</option>
                                                <option value="2">3 columns</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="box-body col-md-6">
                                            <label class="control-label">Short Description:</label>
                                            <textarea id="short_description" name="short_description" placeholder="short description"></textarea>
                                        </div>
                                        <div class="box-body col-md-6">
                                            <label class="control-label">Description:</label>
                                            <textarea rows="4" id="description" name="description" placeholder="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="box-body col-md-6">
                                        <label class="control-label">Author Name:</label>
                                        <input class="form-control" id="author_name" name="author_name" placeholder="author name" type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="box-body col-md-6">
                                        <label class="control-label">Choose Tags:</label>
                                            <select id="category_tags" multiple="multiple" class="form-control" name="tags_id[]" size=6>
                                                <option value="-1">None</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="box-body">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">Actions</div>
                                                <div class="box-body">
                                                    <div class="tab-pane" id="2a">
                                                        <a class="btn btn-primary btnPrevious">Previous</a>
                                                        <a class="btn btn-primary btnNext">Next</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane tab-media" id="tab3">
                                    @include('adminlte::pages.partials.tab-media')
                                    <div class="row">
                                        <div class="box-body">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">Actions</div>
                                                <div class="box-body">
                                                    <div class="tab-pane" id="3a">
                                                        <a class="btn btn-primary btnPrevious">Previous</a>
                                                        <a class="btn btn-primary btnNext">Next</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab4">
                                    <div class="row">
                                        <div class="box-body col-md-6">
                                            <label class="control-label">Add Meta Tags</label>
                                            <textarea class="form-control" id="meta_tags" name="meta_tags" placeholder="meta content"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="box-body">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">Actions</div>
                                                <div class="box-body">
                                                    <div class="tab-pane" id="4a">
                                                        <a class="btn btn-primary btnPrevious">Previous</a>
                                                        <a class="btn btn-primary btnNext">Next</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab5">
                                    <div class="row">
                                        <div class="box-body col-md-6">
                                            <select name="google_ads_active" id="google_ads_active">
                                                <option value="-1">Enable Google Ads</option>
                                                <option value="0">Yes</option>
                                                <option value="1">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="box-body col-md-6">
                                            <select name="facebook_ads_active" id="facebook_ads_active">
                                                <option value="-1">Enable Facebook Socials</option>
                                                <option value="0">Yes</option>
                                                <option value="1">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="box-body col-md-6">
                                            <select name="google_analytics" id="google_analytics">
                                                <option value="-1">Enable Google Analytics</option>
                                                <option value="0">Yes</option>
                                                <option value="1">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="box-body">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">Actions</div>
                                                <div class="box-body">
                                                    <div class="tab-pane" id="5a">
                                                        <a class="btn btn-primary btnPrevious">Previous</a>
                                                        <button type="submit" class="btn btn-primary">
                                                            <i class="fa fa-btn"></i>Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
@endsection

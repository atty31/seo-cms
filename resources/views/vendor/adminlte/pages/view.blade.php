@extends('adminlte::layouts.app')

@section('htmlheader_title', $page->ptitle)
@section('contentheader_title', $page->ptitle)
@section('contentheader_description', '('.trans('adminlte_lang::message.edit_post').')')


@section('main-content')

    <div class="col-md-12">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form-horizontal" action="{{ route('page.update', ['pageId' => $page->pid]) }}" method="POST" name="update_page" id="update_page">
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
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="box-body col-md-6">
                                        <label class="control-label">Title:</label>
                                        <input value="{{ $page->ptitle }}" class="form-control" id="title" name="title" placeholder="title" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="box-body col-md-6">
                                        <label class="control-label">Url Name:</label>
                                        <input value="{{ $page->purl_name }}" class="form-control" id="url_name" name="url_name" placeholder="url name" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="box-body col-md-6">
                                        <label class="control-label">Comments:</label><br>
                                        <select name="enable_comments" id="enable_comments">
                                            <option value="-1">Comments</option>
                                            <option value="1" @if ($page->comments == '1') selected="selected" @endif>Enable</option>
                                            <option value="0" @if ($page->comments == '0') selected="selected" @endif>Disable</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="box-body col-md-6">
                                        <label class="control-label">Select type:</label><br>
                                        <select name="is_static" id="is_static">
                                            <option value="-1">Select type</option>
                                            <option value="1" @if ($page->pstatic == '1') selected="selected" @endif>Static</option>
                                            <option value="0" @if ($page->pstatic == '0') selected="selected" @endif>Category</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row category_id">
                                    <div class="box-body col-md-6">
                                        <label class="control-label">Select a category:</label><br>
                                        <select name="category_id" id="category_id">
                                            <option value="-1">None</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" @if ($page->cid == $category->id) selected="selected" @endif >{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row subcategory_id">
                                    <div class="box-body col-md-6">
                                        <label class="control-label">Select a subcategory:</label><br>
                                        <select name="subcategory_id" id="subcategory_id">
                                            <option value="-1">None</option>
                                            @foreach($subcategories as $subcategory)
                                                <option value="{{$subcategory->id}}" @if ($page->sid == $subcategory->id) selected="selected" @endif >{{$subcategory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="box-body col-md-6">
                                        <select name="is_active" id="is_active">
                                            <option value="-1">Select status</option>
                                            <option value="1" @if ($page->pstatus == '1') selected="selected" @endif>Active</option>
                                            <option value="0" @if ($page->pstatus == '0') selected="selected" @endif>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="box-body col-md-6">
                                        <label class="control-label">ID:</label>
                                        {{ $page->pid }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="box-body col-md-6">
                                        <label class="control-label">Created at:</label>
                                        {{ $page->pcreated_at }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="box-body col-md-6">
                                        <label class="ontrol-label">Updated at:</label>
                                        {{ $page->pupdated_at }}
                                    </div>
                                </div>
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
                                    <option value="0" @if ($page->ppage_cols == '0') selected="selected" @endif>1 column</option>
                                    <option value="1" @if ($page->ppage_cols == '1') selected="selected" @endif>2 columns</option>
                                    <option value="2" @if ($page->ppage_cols == '2') selected="selected" @endif>3 columns</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="box-body col-md-6">
                                <label class="control-label">Short Description:</label>
                                <textarea id="short_description" name="short_description" placeholder="short description">{{ $page->pcshort}}</textarea>
                            </div>
                            <div class="box-body col-md-6">
                                <label class="control-label">Description:</label>
                                <textarea rows="4" id="description" name="description" placeholder="description">{{ $page->pcdesc}}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="box-body col-md-6">
                                <label class="control-label">Choose Tags:</label>
                                <select id="category_tags" multiple="multiple" class="form-control" name="tags_id[]" size=6>
                                    <option value="-1">None</option>
                                    <?php
                                        $selectedTags = explode(',', $page->tags_ids);
                                    ?>
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}" @if (in_array($tag->id, $selectedTags)) selected="selected" @endif>{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="box-body col-md-6">
                                <label class="control-label">Author Name:</label>
                                <input value="{{ $page->pcauthor }}" class="form-control" id="author_name" name="author_name" placeholder="author name" type="text">
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
                                <textarea rows="30" class="form-control" id="meta_tags" name="meta_tags" placeholder="meta content">{{ $page->pcmeta}}</textarea>
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
                                    <option value="1" @if ($page->pgoogleads == '1') selected="selected" @endif>Yes</option>
                                    <option value="0" @if ($page->pgoogleads == '0') selected="selected" @endif>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="box-body col-md-6">
                                <select name="facebook_ads_active" id="facebook_ads_active">
                                    <option value="-1">Enable Facebook Socials</option>
                                    <option value="1" @if ($page->pfacebookads == '1') selected="selected" @endif>Yes</option>
                                    <option value="0" @if ($page->pfacebookads == '0') selected="selected" @endif>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="box-body col-md-6">
                                <select name="google_analytics" id="google_analytics">
                                    <option value="-1">Enable Google Analytics</option>
                                    <option value="1" @if ($page->pgoogleanalytics == '1') selected="selected" @endif>Yes</option>
                                    <option value="0" @if ($page->pgoogleanalytics == '0') selected="selected" @endif>No</option>
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
                                                <i class="fa fa-btn"></i>Update
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
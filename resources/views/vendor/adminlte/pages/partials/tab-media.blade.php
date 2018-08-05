<div class="row margin-bottom">
    <div class="col-md-6">
        <img class="selected-image" @if (!empty($page->path)) src="/{{$page->path}}" width="150" height="150" @endif>
    </div>
</div>
<div class="margin-bottom">
    <input type="hidden" name="feature-image" id="featured-image">
    <button id="set-featured-image" class="btn btn-default" type="button">
        <i class="fa fa-fw fa-photo"></i>
        {{ trans('adminlte_lang::message.set_featured_image') }}
    </button>
</div>

@include('adminlte::media.image.image-modal')
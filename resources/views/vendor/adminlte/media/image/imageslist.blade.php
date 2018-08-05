<div class="row">
    @foreach($images as $image)
        <img src="{{ url('admin/image', [150, 150, $image->name]) }}"  id="{{ $image->id }}" class="select-image img-thumbnail"/>
    @endforeach
</div>
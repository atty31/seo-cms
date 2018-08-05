<div class="col-xs-12">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Media Files</h3>
            <div class="pull-right">
                <button type="button" class="btn btn-success pull-right" onclick="window.location='{{ url("admin/image/create/") }}?folder={{ $currentFolder }}'"><span class="glyphicon glyphicon-save"></span>Add New Media</button>
            </div>
        </div>
        <div class="box-body">
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Create by</th>
                        <th>Path</th>
                        <th>Upload Date</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($images as $image)
                        <tr data-id="{{ $image->id }}">
                            <td>
                                {{ $image->id }}
                            </td>
                            <td>
                                {{ $image->name }}
                            </td>
                            <td>
                                <img src="{{ url('/') }}/{{ $image->path }}" alt="{{ $image->alt }}" width="100" height="100">
                            </td>
                            <td>{{ $image->uname }}</td>
                            <td>{{ $image->type }}</td>
                            <td>{{ $image->created_at }}</td>
                            <td>
                                <a href=""><i class="fa fa-eye"></i></a>
                                <a href=""><i class="fa fa-edit"></i></a>
                                <a href="{{ route('image.delete', ['imageId' => $image->id]) }}">
                                    <i class="fa fa-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="panel-body">
            {{ $images->links() }}
        </div>
    </div>
</div>
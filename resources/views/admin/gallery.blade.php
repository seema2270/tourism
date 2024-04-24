@extends('admin.layout.main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Gallery</div>

            <div class="card-body">
                <div class="div">
                    <form action="/admin/store-gallery" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control" id="image">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
                <table class="table table-bordered pt-2">
                    <thead>
                        <tr>
                            <th>SN</th>
                           
                            <th>Image</th>
                          
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach($galleries as $gallery)
                        <tr>
                            <td>{{ ++$i }}</td>
                        
                            <td><img src="{{asset($gallery->image)}}" alt="" width="50"></td>
                           
                            <td>
                                <a href="/admin/delete-gallery/{{$gallery->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
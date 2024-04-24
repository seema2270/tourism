@extends('admin.layout.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Blog Posts</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{ $blog->title }}</td>
                                <td><img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" style="max-width: 100px;"></td>
                                <td>{{ $blog->description }}</td>
                                <td><a href="/admin/delete-blog/{{$blog->id}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
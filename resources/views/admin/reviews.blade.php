@extends('admin.layout.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Package Review</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Package Name</th>
                                <th>User Name</th>
                                <th>Rating</th>
                                <th>Review</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($reviews as $review)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{ $review->package['name'] }}</td>
                                <td>{{ $review->user['name'] }}</td>
                                <td>{{ $review->rating }} Star</td>
                                <td>{{ $review->review }}</td>

                                <td><a href="/admin/delete-review/{{$review->id}}" class="btn btn-danger">Delete</a></td>
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
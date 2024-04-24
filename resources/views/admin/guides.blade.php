@extends('admin.layout.main')
@section('content')
<div class="row ">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Guides</div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach($guides as $guide)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $guide->name }}</td>
                            <td>{{ $guide->email }}</td>
                            <td><img src="{{asset($guide->image)}}" alt="" width="50"></td>
                            <td>{{ $guide->address }}</td>
                            <td>{{ $guide->contact }}</td>
                            <td>{{$guide->description}}</td>
                            <td>
                                <a href="/admin/delete-user/{{$guide->id}}" class="btn btn-danger">Delete</a>
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
@extends('admin.layout.main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Packages</div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Image</th>


                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($packages as $key => $package)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $package->name }}</td>
                            <td>
                                @if($package->image)
                                <img src="{{ asset($package->image) }}" alt="Package Image" width="100">
                                @else
                                No Image
                                @endif
                            </td>

                            <td>
                                <a href="/admin/create-itinerary/{{$package->id}}" class="btn btn-primary">Create Itineraries</a>
                                <a href="/admin/delete-package/{{$package->id}}" class="btn btn-danger">Delete</a>
                                <a href="/admin/view-package/{{$package->id}}" class="btn btn-success">View</a>

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
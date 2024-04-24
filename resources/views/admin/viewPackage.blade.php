@extends('admin.layout.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>{{ $package->name }}</h2>
            <p><strong>Description:</strong> {{ $package->description }}</p>
            <p><strong>Budget:</strong> {{ $package->budget }}</p>
            <p><strong>Duration:</strong> {{ $package->duration }}</p>
            <p><strong>Weather Activity:</strong> {{ $package->weather_activity }}</p>
            <p><strong>Map:</strong> {{ $package->map }}</p>
            <p><strong>Gallery Images:</strong></p>
            @foreach(json_decode($package->gallery_images) as $image)
            <img src="{{ asset($image)  }}" alt="Gallery Image" width="50">
            @endforeach
            <p><strong>Created at:</strong> {{ $package->created_at }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Itineraries</h3>
            @if(count($itineraries) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($itineraries as $itinerary)
                    <tr>
                        <td>{{ $itinerary->name }}</td>
                        <td>{{ $itinerary->description }}</td>
                        <td><img src="{{ asset($itinerary->image) }}" alt="Itinerary Image" width="50"></td>
                        <td>
                            <a href="/admin/edit-itinerary/{{ $itinerary->id }}" class="btn btn-primary">Edit</a>
                            <a href="/admin/delete-itinerary/{{ $itinerary->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p>No itineraries found for this package.</p>
            @endif
        </div>
    </div>
</div>
@endsection

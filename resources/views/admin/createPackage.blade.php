@extends('admin.layout.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Package</div>

                <div class="card-body">
                    <form action="/admin/store-package" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" id="image" name="image" class="form-control-file" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea id="description" name="description" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="budget">Budget:</label>
                            <input type="number" step="any" id="budget" name="budget" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="duration">Duration:</label>
                            <input type="text" id="duration" name="duration" class="form-control" required>
                        </div>

                       
                        <div class="form-group">
                            <label for="weather_activity">Activity:</label>
                            <textarea id="weather_activity" name="weather_activity" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="gallery_images">Gallery Images:</label>
                            <input type="file" id="gallery_images" name="gallery_images[]" class="form-control-file" multiple required>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Package</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

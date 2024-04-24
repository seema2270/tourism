@extends('admin.layout.main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Contacts</div>

            <div class="card-body">

                <table class="table table-bordered pt-2">
                    <thead>
                        <tr>
                            <th>SN</th>

                            <th>Name</th>
                            <th>Contact</th>
                            <th>Message</th>


                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach($contacts as $contact)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{$contact->name }}</td>
                            <td>{{$contact->contact }}</td>
                            <td>{{$contact->message }}</td>
                            <td>
                                <a href="/admin/delete-contact/{{$contact->id}}" class="btn btn-danger">Delete</a>
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
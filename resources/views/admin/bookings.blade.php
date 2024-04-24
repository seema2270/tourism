@extends('admin.layout.main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Bookings</div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered pt-2">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Guide Needed</th>
                                <th>Note</th>
                                <th>Date</th>
                                <th>Package</th>
                                <th>Status</th>
                                <th>Payment Method</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach($bookings as $booking)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $booking->user->name }}
                                    <br>
                                    <img src="{{asset($booking->user->image)}}" alt="" width="50">
                                </td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->contact }}</td>
                                <td>{{ $booking->email }}</td>
                                <td>
                                    {{$booking->need_guide}}
                                </td>
                                <td>{{ $booking->note }}</td>
                                <td>{{ $booking->date }}</td>

                                <td>{{ $booking->package->name }}</td>
                                <td>{{ $booking->status }}</td>
                                <td>{{ $booking->payment_method }}</td>
                                <td>{{ $booking->payment_status }}</td>

                                <td class="d-flex" style="width: 400px;">
                                    @if($booking->payment_status == 'unpaid')
                                    <a href="/admin/booking/paid/{{$booking->id}}" class="btn btn-secondary">Paid</a>
                                    @endif
                                  
                                    &nbsp;
                                    <form id="bookingForm{{$booking->id}}" method="POST" action="/admin/booking/change-status/{{$booking->id}}">
                                        @csrf
                                        <select id="statusSelect{{$booking->id}}" name="status" class="form-control bg-light p-2">
                                            <option selected disabled>Change Status</option>
                                            <option value="booked">Booked Booking</option>
                                            <option value="active">Confirm Booking</option>
                                            <option value="completed">Complete Booking</option>
                                            <option value="cancelled">Cancel Booking</option>
                                        </select>
                                    </form>
                                    <script>
                                        // Get the select element
                                        var selectElement = document.getElementById('statusSelect{{$booking->id}}');

                                        // Add event listener to submit form when selection changes
                                        selectElement.addEventListener('change', function() {
                                            document.getElementById('bookingForm{{$booking->id}}').submit(); // Submit the form
                                        });
                                    </script>
                                    <a href="/admin/booking/delete/{{$booking->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
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

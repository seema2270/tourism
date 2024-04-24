@extends('frontend.layout.main')
@section('content')

<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Booking</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="contact-wrapper pt-100">
    <div class="container">
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
                                <th>Package</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Note</th>
                                <th>Date</th>
                                <th>Guide Needed</th>
                                <th>Payment Method</th>
                                <th>Payment Status</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach($bookings as $booking)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td><a href="/package-details/{{$booking->package->id}}">{{ $booking->package->name }}</a></td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->contact }}</td>
                                <td>{{ $booking->email }}</td>
                                <td>{{ $booking->note }}</td>
                                <td>{{ $booking->date }}</td>
                                <td>
                                    {{$booking->need_guide}}
                                </td>
                                <td>{{ $booking->payment_method }}</td>
                                <td>{{ $booking->payment_status }}</td>
                                <td>{{ $booking->status }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>

@endsection
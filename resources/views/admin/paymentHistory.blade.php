@extends('admin.layout.main')
@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Payment History</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Package Name</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0;?>
                                   @foreach($paymentHistory as $payment)
                                    <tr>
                                        <td>
                                            {{++$i}}
                                        </td>
                                        <td>{{$payment->booking->package->name}}</td>
                                        <td>{{$payment->booking->package->budget}}

                                        </td>
                                        <td>{{$payment->booking->payment_method}} - {{$payment->status}}

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
    </div>
</section>
@endsection
<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Package;
use App\Models\PaymentHistory;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function store(Request $request)
    {
        // dd($request->all());
        // Create a new booking instance
        $booking = new Booking();
        $booking->user_id = auth()->user()->id;
        $booking->name = $request->name;
        $booking->contact = $request->contact;
        $booking->email = $request->email;
        $booking->note = $request->note;
        if ($request->payment_method == 'cash') {
            $booking->payment_method = 'cash';
        } else {
            $booking->payment_method = 'online';
        }
        $booking->need_guide = $request->need_guide;

        $booking->date = $request->date;
        $booking->no_of_people = $request->no_of_people;

        $booking->package_id = $request->package_id;
        // Save the booking
        $booking->save();
        if ($request->payment_method == 'cash') {
            return redirect('/my-booking');
        } else {
            $pro = Package::find($request->package_id);
            $total = $pro->budget;
            if ($request->payment_method == 'khalti') {
                $url = '/booking/pay-with-khalti/' . $total . '/' . $booking->id;
                return redirect($url);
            
            } else {
                return redirect('/my-booking');
            }
        }
    }

    public function payWithKhalti($price, $id)
    {
        return view('frontend.paywithkhalti', compact('price', 'id'));
    }

    public function verifybookignPurchaseStatus($id)
    {
        $booking = Booking::find($id);
        $booking->payment_status = 'paid';
        $booking->update();

        $paymentHistory = new PaymentHistory();
        $paymentHistory->amount = $booking->package->budget;
        $paymentHistory->booking_id = $id;
        $paymentHistory->save();

        return redirect('/my-booking');
    }

   

    public function markAsPaid($id)
    {
        $booking = Booking::find($id);

        $booking->payment_status = 'paid';
        $booking->save();

        $paymentHistory = new PaymentHistory();
        $paymentHistory->amount = $booking->package->budget;
        $paymentHistory->booking_id = $id;
        $paymentHistory->save();

        return redirect()->back();
    }

    public function changeStatus(Request $request, $id)
    {
        $booking = Booking::find($id);

        $booking->status = $request->status;


        $booking->update();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        return redirect()->back();
    }
}

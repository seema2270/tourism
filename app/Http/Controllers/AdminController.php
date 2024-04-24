<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Package;
use App\Models\PaymentHistory;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        $packages = Package::count();
        $bookings = Booking::count();
        $users = User::count();
        $reviews = Review::count();
        $newBooking = Booking::orderBy('id','desc')->where('status','booked')->get();
        return view('admin.dashboard',compact('packages','bookings','users','reviews','newBooking'));
    }

    public function users()
    {
        $users = User::where('role', 'user')->orderBy('id', 'desc')->get();
        return view('admin.users', compact('users'));
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }

    public function createGuides()
    {
        return view('admin.createGuide');
    }
    public function storeGuide(Request $request)
    {
        try {
            $guide = new User();
            $guide->name = $request->name;
            $guide->email = $request->email;
            $guide->contact = $request->contact;
            $guide->password = Hash::make('AcNOoNdYeMrOUS');
            $guide->address = $request->address;
            $guide->description = $request->description;
            $guide->role = 'guide';
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $fileName = time() . $image->getClientOriginalName();
                $image->move('images/guides', $fileName);
                $guide->image = 'images/guides/' . $fileName;
            }
            $guide->save();
            return redirect('/admin/guides');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function guides()
    {
        $guides = User::where('role', 'guide')->orderBy('id', 'desc')->get();
        return view('admin.guides', compact('guides'));
    }

    public function createPackage()
    {
        return view('admin.createPackage');
    }
    public function package()
    {
        $packages = Package::orderBy('id','desc')->get();
        return view('admin.package',compact('packages'));
    }
    public function booking()
    {
        return view('admin.booking');
    }
    public function reviews()
    {
        $reviews = Review::orderBy('id','desc')->get();
        return view('admin.reviews',compact('reviews'));
    }
    public function contact()
    {
        $contacts = Contact::orderBy('id','desc')->get();
        return view('admin.contact',compact('contacts'));
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function createblog(){
        return view('admin.createblog');
    }
    public function blog(){
        $blogs = Blog::orderBy('id','desc')->get();
        return view('admin.blogs',compact('blogs'));
    }

    public function gallery(){
        $galleries = Gallery::orderBy('id','desc')->get();
        return view('admin.gallery',compact('galleries'));
    }

    public function bookings(){
        $bookings = Booking::orderBy('id','desc')->get();
        return view('admin.bookings', compact('bookings'));
    }

    public function paymentLogs(){
        $paymentHistory = PaymentHistory::orderBy('id','desc')->get();
        return view('admin.paymentHistory',compact('paymentHistory'));
    }
}

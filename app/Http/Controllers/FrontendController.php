<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Booking;
use App\Models\Gallery;
use App\Models\Itinerary;
use App\Models\Package;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $packages = Package::orderBy('id', 'desc')->take(6)->get();
        $guides = User::where('role', 'guide')->orderBy('id', 'desc')->get();
        $blogs = Blog::orderBy('id', 'desc')->take(3)->get();
        $galleries = Gallery::inRandomOrder()->take(8)->get();
        return view('frontend.index', compact('packages', 'guides', 'blogs', 'galleries'));
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function package()
    {
        $packages = Package::orderBy('id', 'desc')->get();
        return view('frontend.packages', compact('packages'));
    }
    public function packageDetails($id)
    {
        $package = Package::findOrFail($id);
        $reviews = Review::where('package_id', $id)->orderBy('id', 'desc')->get();
        $itinearies = Itinerary::where('package_id', $id)->orderBy('id', 'desc')->get();

        // get my booking
        $giveReview = 0;
        if (auth()->user()) {
            $myBooking = Booking::where('user_id', auth()->user()->id)->where('package_id', $package->id)->where('status', 'active')->orWhere('status', 'completed')->get();
            if ($myBooking->count() > 0) {
                $giveReview = 1;
            } else {
                $giveReview = 0;
            }
        } else {
            $giveReview = 1;
        }
        return view('frontend.package-details', compact('package', 'reviews', 'itinearies','giveReview'));
    }
    public function blog()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('frontend.blogs', compact('blogs'));
    }
    public function blogDetails($id)
    {
        $blog = Blog::findOrFail($id);
        return view('frontend.blog-details', compact('blog'));
    }
    public function gallery()
    {
        $galleries = Gallery::inRandomOrder()->get();
        return view('frontend.gallery', compact('galleries'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}

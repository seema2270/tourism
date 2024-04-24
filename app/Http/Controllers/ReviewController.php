<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function store(Request $request, $id)
    {
        $checkreview = Review::where('package_id',$id)->where('user_id',auth()->user()->id)->get();
        if($checkreview->count() > 0){
            return back()->with('message','Allready Reviewd !!');
        }
        $review = new Review();
        $review->user_id = auth()->user()->id;
        $review->package_id = $id;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->save();
        return back()->with('message','Thank You For Review !!');

    }

    
    public function destroy($id)
    {
        $review=Review::findOrFail($id);
        $review->delete();
        return back();
    }
}

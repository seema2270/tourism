<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function store(Request $request)
    {
        $gallery = new Gallery();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move('images/gallery', $fileName);
            $gallery->image = 'images/gallery/' . $fileName;
        }
        $gallery->save();
        return back();
    }


    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return back();
    }
}

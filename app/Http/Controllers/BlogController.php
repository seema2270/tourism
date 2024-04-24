<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move('images/blog', $fileName);
            $blog->image = 'images/blog/' . $fileName;
        }
        $blog->description = $request->description;
        $blog->save();
        return redirect('/admin/blog');
    }

    
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return back();
    }
}

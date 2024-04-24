<?php

namespace App\Http\Controllers;

use App\Models\Itinerary;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{

    public function store(Request $request)
    {
        $package = new Package();
        $package->name = $request->name;
        $package->description = $request->description;
        $package->budget = $request->budget;
        $package->weather_activity = $request->weather_activity;
        $package->duration = $request->duration;
        

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move('images/packages', $fileName);
            $package->image = 'images/packages/' . $fileName;
        }

        // Handle gallery images
        $galleryImages = [];
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $galleryImage) {
                $galleryFileName = time() . '_' . $galleryImage->getClientOriginalName();
                $galleryImage->move('images/packages/gallery', $galleryFileName);
                $galleryImages[] = 'images/packages/gallery/' . $galleryFileName;
            }
        }
        $package->gallery_images = json_encode($galleryImages);

        $package->save();

        return redirect('/admin/package');
    }

    public function show($id)
    {
        $package = Package::findOrFail($id);
        $itineraries = Itinerary::where('package_id',$id)->get();
        return view('admin.viewPackage', compact('package', 'itineraries'));
    }

    public function destroy($id)
    {
        $package = Package::find($id);
        $package->delete();
        return back();
    }
}

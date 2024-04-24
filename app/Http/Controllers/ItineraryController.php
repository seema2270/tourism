<?php

namespace App\Http\Controllers;

use App\Models\Itinerary;
use App\Models\Package;
use Illuminate\Http\Request;

class ItineraryController extends Controller
{

    public function create($id)
    {
        $package = Package::find($id);
        return view('admin.createItinearies', compact('package'));
    }


    public function store(Request $request)
    {
        $record = new Itinerary();

        // Assign values to the model attributes
        $record->package_id = $request->package_id;
        $record->name = $request->name;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move('images/itinearies', $fileName);
            $record->image = 'images/itinearies/' . $fileName;
        }
        $record->description = $request->description;

        // Save the record to the database
        $record->save();
        return redirect('/admin/package');
    }

    public function destroy($id){
        $data = Itinerary::find($id);
        $data->delete();
        return back();
    }
    public function edit($id){
        $data = Itinerary::find($id);
        return view('admin.editItinearies', compact('data'));
    }

    public function update(Request $request,$id)
    {
        $record = Itinerary::find($id);

        // Assign values to the model attributes
        $record->name = $request->name;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move('images/itinearies', $fileName);
            $record->image = 'images/itinearies/' . $fileName;
        }
        $record->description = $request->description;

        // Save the record to the database
        $record->update();
        return redirect('/admin/package');
    }

}

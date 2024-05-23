<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Locale;

class LocationController extends Controller
{
    public function viewLocations()
    {
        $locations = Location::all();
        return view('admin.locations.viewlocation', compact('locations'));
    }

    public function addLocations()
    {
        $locations = Location::all();
        return view('admin.locations.addlocation', compact('locations'));
    }

    public function saveLocations(Request $request)
    {
        $input = $request->all();
        $post = Location::create([
            'name' => $request->name,
        ]);
        return redirect()->route('admin.viewLocations')->with('success', 'location added successfully');
    }

    public function editLocations($id)
    {
        $locations = Location::find($id);
        return view('admin.locations.editlocation', compact('locations', 'id'));
    }

    public function updateLocations(Request $request, $id)
    {
        $locations = Location::findOrFail($id);
        $locations->name = $request->name;
        $locations->save();
        return redirect()->route('admin.viewLocations')->with('success', 'location updated successfully');
    }


    public function toggleLocation($id)
    {
        $Location = Location::find($id);
        if ($Location) {
            $Location->toggleActive();
            $Location->save();
            return redirect()->back()->with(['success' => 'Status Changed Successfully']);
        } else {
            return redirect()->back()->with(['error' => 'Something Went Wrong']);
        }
    }



    public function deleteLocations($id)
    {
        $locations = Location::findOrFail($id);
        $locations->delete();
        return redirect()->route('admin.viewLocations')->with('success', 'location deleted successfully');
    }


}

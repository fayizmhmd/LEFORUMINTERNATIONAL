<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\Course;
use App\Models\Location;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class CollegeController extends Controller
{
    public function viewColleges()
    {
        $colleges = College::all();
        return view('admin.colleges.viewcolleges', compact('colleges'));
    }

    public function addColleges()
    {
        $colleges = College::all();
        $locations = Location::all();
        $courses = Course::all();
        return view('admin.colleges.addcolleges', compact('colleges', 'locations', 'courses'));
    }

    public function saveColleges(Request $request)
    {
        $college               =   new College();
        $college->name         =   $request->name;
        $college->rating = $request->rating;

        $college->description = $request->summernote;

        $slug = Str::slug($request->name);
        $uniqueSlug = College::where('slug', $slug)->exists();
        if ($uniqueSlug) {
            $slug .= '-' . uniqid();
        }
        $college->slug = $slug;

        $college->type = (int) $request->type;

        $dom = new \DomDocument();
        $dom->loadHtml($college->description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');

        $images = [];
        if ($request->file('images')) {

            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/colleges/'), $imageName);
                $images[] = 'colleges/' . $imageName;
            }
        }
       $college->image = json_encode($images);

        $content = $dom->saveHTML();
        $college->save();

        $college->locations()->sync($request->location_id);
        $college->courses()->sync($request->course_id);

        return redirect()->route('admin.viewColleges')->with('message', 'college saved successfully');
    }

    public function edit($id)
    {
        $colleges = College::find($id);
        $locations = Location::all();
        $courses = Course::all();
        return view('admin.colleges.editcolleges', compact('colleges', 'id', 'locations', 'courses'));
    }

    public function updateCollege(Request $request, $id)
    {
        $college = College::find($id);
        $college->name = $request->name;
        $college->rating = $request->rating;

        $slug = Str::slug($request->name);
        $uniqueSlug = College::where('slug', $slug)->where('id', '!=', $id)->exists();
        if ($uniqueSlug) {
            $slug .= '-' . uniqid();
        }
        $college->slug = $slug;

        $college->type = (int) $request->type;

        $images = [];
        if ($request->file('images')) {

            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/colleges/'), $imageName);
                $images[] = 'colleges/' . $imageName;
            }
        }
       $college->image = json_encode($images);

        $content = $request->summernote;

        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $college->description = $dom->saveHTML();
        $college->save();
        $college->locations()->sync($request->location_id);
        $college->courses()->sync($request->course_id);
        return redirect()->route('admin.viewColleges')->with('message', 'College updated successfully');
    }


    public function toggleCollege($id)
    {
        $college = College::find($id);
        if ($college) {
            $college->toggleActive();
            $college->save();
            return redirect()->back()->with(['success' => 'Status Changed Successfully']);
        } else {
            return redirect()->back()->with(['error' => 'Something Went Wrong']);
        }
    }


    public function delete($id)
    {
        $college = College::find($id);

        if ($college) {
            if (!empty($college->image)) {
                Storage::delete('images/' . $college->image);
            }

            $college->delete();

            return redirect()->route('admin.viewColleges')->with('message', 'College deleted successfully');
        } else {
            return redirect()->route('admin.viewColleges')->with('error', 'College not found');
        }
    }

    // public function viewone($slug)
    // {
    //     $college = College::where('slug', $slug)->firstOrFail();

    //     // Generate and assign slug if not already generated
    //     if (!$college->slug) {
    //         $slug = Str::slug($college->name);
    //         $uniqueSlug = College::where('slug', $slug)->where('id', '!=', $college->id)->exists();
    //         if ($uniqueSlug) {
    //             $slug .= '-' . uniqid();
    //         }
    //         $college->slug = $slug;
    //         $college->save();
    //     }

    //     return view('frontend.viewonecollege', compact('college'));
    // }

    public function viewOne($id)
    {
        // Fetch the college data based on the ID
        $college = College::findOrFail($id);

        // Return a view with the college data
        return view('frontend.viewonecollege', compact('college'));
    }
}

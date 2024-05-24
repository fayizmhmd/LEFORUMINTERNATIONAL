<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\College;
use App\Models\Course;
use App\Models\Location;
use App\Models\Review;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home()
    {
        $colleges = College::all();
        $type_universities = College::where('type', 2)->get();
        $type_colleges = College::where('type', 1)->get();
        $categories = Category::all();
        $reviews = Review::all();
        $courses = Course::all();
        $locations = Location::all();
        return view('frontend.home', compact('categories', 'colleges', 'reviews', 'courses', 'locations','type_colleges','type_universities'));
    }

    public function allcolleges(Request $request)
{
    // Retrieve selected course and location from the request
    $keyword = $request->input('key-word');
    $region = $request->input('region');

    // Initialize query
    $query = College::query();

    // Apply filters if provided
    if (!empty($keyword)) {
        $query->whereHas('courses', function ($q) use ($keyword) {
            $q->where('name', 'like', '%' . $keyword . '%');
        });
    }

    if (!empty($region)) {
        $query->whereHas('locations', function ($q) use ($region) {
            $q->where('name', $region);
        });
    }

    // Get the filtered or all colleges
    $colleges = $query->get();

    // Retrieve all locations
    $locations = Location::all();

    // Pass colleges and locations to the view
    return view('frontend.allcolleges', compact('colleges', 'locations'));
}

}

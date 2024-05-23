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

        // Filter colleges based on the selected course and location
        $colleges = College::whereHas('courses', function ($query) use ($keyword) {
            $query->where('name', 'like', '%' . $keyword . '%');
        })
            ->whereHas('locations', function ($query) use ($region) {
                $query->where('name', $region);
            })
            ->get();

        // Retrieve all locations
        $locations = Location::all();

        // Pass colleges and locations to the view
        return view('frontend.allcolleges', compact('colleges', 'locations'));
    }
}

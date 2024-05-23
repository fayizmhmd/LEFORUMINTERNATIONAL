<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Location;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function viewCourses()
    {
        $courses = Course::all();
        return view('admin.courses.viewcourse', compact('courses'));
    }

    public function addCourses()
    {
        $courses = Course::all();
        return view('admin.courses.addcourses', compact('courses'));
    }

    public function saveCourses(Request $request)
    {
        $input = $request->all();
        $post = Course::create([
            'name' => $request->name,
        ]);
        return redirect()->route('admin.viewCourses')->with('success', 'Review added successfully');
    }

    public function editCourses($id)
    {
        $courses = Course::find($id);
        return view('admin.courses.editcourses', compact('courses', 'id'));
    }

    public function updateCourses(Request $request, $id)
    {
        $courses = Course::findOrFail($id);
        $courses->name = $request->name;
        $courses->save();
        return redirect()->route('admin.viewCourses')->with('success', 'Course updated successfully');
    }



    public function toggleCourse($id)
    {
        $course = Course::find($id);
        if ($course) {
            $course->toggleActive();
            $course->save();
            return redirect()->back()->with(['success' => 'Status Changed Successfully']);
        } else {
            return redirect()->back()->with(['error' => 'Something Went Wrong']);
        }
    }


    public function deleteCourses($id)
    {
        $courses = Course::findOrFail($id);
        $courses->delete();
        return redirect()->route('admin.viewCourses')->with('success', 'Course deleted successfully');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $courses = Course::where('name', 'like', "%$query%")->get();
        return response()->json($courses);
    }

    public function searchlocation(Request $request)
    {
        $query = $request->input('query');
        $locations = Location::where('name', 'like', "%$query%")->get();
        return response()->json($locations);
    }
}

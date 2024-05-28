<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\CollegeReview;
use Illuminate\Http\Request;

class CollegeReviewController extends Controller
{
    public function viewCollegeReview()
    {
        $collegereviews = CollegeReview::all();
        return view('admin.collegeReview.viewcollegereview', compact('collegereviews'));
    }

    public function addCollegeReview()
    {
        $collegereviews = CollegeReview::all();
        $colleges = College::pluck('name', 'id');
        return view('admin.collegeReview.addcollegereview', compact('collegereviews','colleges'));
    }

    public function saveCollegeReviews(Request $request)
    {
        $collegereview = new CollegeReview();
        $collegereview->name = $request->name;
        $collegereview->position = $request->position;
        $collegereview->review = $request->review;
        $collegereview->college_id = $request->college_id;



        if ($request->file('image')) {
            $file = $request->file('image');
            $imageName = time() . '_' . $file->getClientOriginalName();

            $destinationPath = public_path('/collegereview');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $imageName);
            @unlink(public_path($collegereview->image));
            $collegereview->image = 'collegereview/' . $imageName;
        }

        $collegereview->save();
        return redirect()->route('admin.viewCollegeReview')->with('success', 'College Review added successfully');
    }


    public function editCollegeReview($id)
    {
        $collegereview = CollegeReview::find($id);
        $colleges = College::pluck('name', 'id');
        return view('admin.collegeReview.editcollegereview', compact('collegereview', 'id','colleges'));
    }


    public function updateCollegeReview(Request $request, $id)
    {
        $collegereview = CollegeReview::find($id);

        if (!$collegereview) {
            return redirect()->back()->with('error', 'College Review not found');
        }

        $collegereview->name = $request->name;
        $collegereview->position = $request->position;
        $collegereview->review = $request->review;
        $collegereview->college_id = $request->college_id;


        if ($request->file('image')) {
            $file = $request->file('image');
            $imageName = time() . '_' . $file->getClientOriginalName();

            $destinationPath = public_path('/collegereview');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $imageName);
            @unlink(public_path($collegereview->image));
            $collegereview->image = 'collegereview/' . $imageName;
        }

        $collegereview->save();
        return redirect()->route('admin.viewCollegeReview')->with('success', 'College Review updated successfully');
    }


    public function deleteCollegeReview($id)
    {
        $collegereview = CollegeReview::findOrFail($id);
        $collegereview->delete();
        return redirect()->route('admin.viewCollegeReview')->with('success', 'College Review deleted successfully');
    }


    public function toggleCollegeReview($id)
    {
        $collegereview = CollegeReview::find($id);
        if ($collegereview) {
            $collegereview->toggleActive();
            $collegereview->save();
            return redirect()->back()->with(['success' => 'Status Changed Successfully']);
        } else {
            return redirect()->back()->with(['error' => 'Something Went Wrong']);
        }
    }
}

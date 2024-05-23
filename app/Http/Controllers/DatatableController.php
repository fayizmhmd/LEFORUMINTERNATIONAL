<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\College;
use App\Models\Course;
use App\Models\Location;
use App\Models\Plan;
use App\Models\Review;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DatatableController extends Controller
{
    public function getAllUsers()
    {

        $users = User::get();
        return DataTables::of($users)
            ->addColumn('id', function ($user) {
                return $user->id;
            })
            ->addColumn('name', function ($user) {
                if (isset($user->name))
                    return $user->name;
                else
                    return 'Name Not Given';
            })
            ->addColumn('email', function ($user) {
                if ($user->email)
                    return $user->email;
                else
                    return "-no email-";
            })

            ->addColumn('roles', function ($user) {
                $roles = "No Role Assigned";
                foreach ($user->roles as $role) {
                    $roles = '<span class="badge bg-info">' . $role->name . '</span>';
                }
                return $roles;
            })
            ->addColumn('status', function ($user) {

                $success = '<a class="btn btn-icon btn-success"
                href="' . route('admin.toggleUser', $user->id) . '">
                <em class="icon ni ni-power"></em>
                </a>';
                $danger = ' <a class="btn btn-icon btn-danger"
                href="' . route('admin.toggleUser', $user->id) . '">
                <em class="icon ni ni-power"></em>
                </a>';
                if ($user->is_active == 1)
                    return $success;
                else
                    return $danger;
            })
            ->addColumn('action', function ($user) {

                $html = '<ul class="nk-tb-actions gx-1">
                <li>
                   <div class="drodown"><a href="#"
                       class="dropdown-toggle btn btn-icon btn-trigger"
                       data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                    <div class="dropdown-menu dropdown-menu-end">
                       <ul class="link-list-opt no-bdr">
                           <li>
                               <a href="' . route('admin.editUser', $user->id) . '">
                                   <em class="icon ni ni-edit"></em>
                                   <span>Edit User</span>
                               </a>
                           </li>
                           <li>
                               <a data-bs-toggle="modal"
                                   data-bs-target="#deleteUser' . $user->id . '">
                                   <em class="icon ni ni-trash"></em>
                                   <span>Delete User</span></span>
                               </a>
                           </li>
                           </ui>
                           </div>
                           </div>
                           </li>
                           </ui>';

                return $html;
            })
            ->rawColumns(['id', 'name', 'email', 'roles', 'status', 'action'])
            ->make(true);
    }

    public function getAllPlans()
    {

        $plans = Plan::get();
        return DataTables::of($plans)
            ->addColumn('id', function ($plan) {
                return $plan->id;
            })
            ->addColumn('name', function ($plan) {
                if (isset($plan->name))
                    return $plan->name;
                else
                    return 'Name Not Given';
            })
            ->addColumn('description', function ($plan) {
                if ($plan->description)
                    return $plan->description;
                else
                    return "-no description-";
            })

            ->addColumn('duration', function ($plan) {
                return $plan->duration;
            })

            ->addColumn('plan_type', function ($plan) {
                if ($plan->plan_type)
                    return $plan->plan_type;
                else
                    return "-no plan-";
            })

            ->addColumn('status', function ($plan) {

                $success = '<a class="btn btn-icon btn-success"
                href="' . route('admin.togglePlan', $plan->id) . '">
                <em class="icon ni ni-power"></em>
                </a>';
                $danger = ' <a class="btn btn-icon btn-danger"
                href="' . route('admin.togglePlan', $plan->id) . '">
                <em class="icon ni ni-power"></em>
                </a>';
                if ($plan->is_active == 1)
                    return $success;
                else
                    return $danger;
            })
            ->addColumn('action', function ($plan) {

                $html = '<ul class="nk-tb-actions gx-1">
                <li>
                   <div class="drodown"><a href="#"
                       class="dropdown-toggle btn btn-icon btn-trigger"
                       data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                    <div class="dropdown-menu dropdown-menu-end">
                       <ul class="link-list-opt no-bdr">
                           <li>
                               <a href="' . route('admin.editPlan', $plan->id) . '">
                                   <em class="icon ni ni-edit"></em>
                                   <span>Edit Plan</span>
                               </a>
                           </li>
                           <li>
                               <a data-bs-toggle="modal"
                                   data-bs-target="#deletePlan' . $plan->id . '">
                                   <em class="icon ni ni-trash"></em>
                                   <span>Delete Plan</span></span>
                               </a>
                           </li>
                           </ui>
                           </div>
                           </div>
                           </li>
                           </ui>';

                return $html;
            })
            ->rawColumns(['id', 'name', 'description', 'duration', 'plan_type', 'status', 'action'])
            ->make(true);
    }

    public function getAllcategories()
    {

        $categories = Category::get();
        return DataTables::of($categories)
            ->addColumn('id', function ($category) {
                return $category->id;
            })
            ->addColumn('name', function ($category) {
                if (isset($category->name))
                    return $category->name;
                else
                    return 'Name Not Given';
            })
            ->addColumn('image', function ($category) {
                if ($category->image) {
                    return '<img src="' . asset($category->image) . '" alt="Category Image" width="100" height="100">';
                } else {
                    return "-no image-";
                }
            })
            ->addColumn('action', function ($category) {

                $html = '<ul class="nk-tb-actions gx-1">
                <li>
                   <div class="drodown"><a href="#"
                       class="dropdown-toggle btn btn-icon btn-trigger"
                       data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                    <div class="dropdown-menu dropdown-menu-end">
                       <ul class="link-list-opt no-bdr">
                           <li>
                               <a href="' . route('admin.editcategories', $category->id) . '">
                                   <em class="icon ni ni-edit"></em>
                                   <span>Edit Categories</span>
                               </a>
                           </li>
                           <li>
                               <a href="' . route('admin.deleteCategory', $category->id) . '">
                                   <em class="icon ni ni-trash"></em>
                                   <span>Delete Categories</span></span>
                               </a>
                           </li>
                           </ui>
                           </div>
                           </div>
                           </li>
                           </ui>';

                return $html;
            })
            ->rawColumns(['id', 'name', 'image', 'action'])
            ->make(true);
    }

    public function getAllcolleges()
    {

        $colleges = College::get();
        return DataTables::of($colleges)
            ->addColumn('id', function ($college) {
                return $college->id;
            })
            ->addColumn('name', function ($college) {
                if (isset($college->name))
                    return $college->name;
                else
                    return 'Name Not Given';
            })
            ->addColumn('rating', function ($college) {
                if (isset($college->rating))
                    return $college->rating;
                else
                    return 'Rating Not Given';
            })
            ->addColumn('description', function ($college) {
                if (isset($college->description))
                    return $college->description;
                else
                    return 'description Not Given';
            })
            ->addColumn('image', function ($college) {
                if ($college->image) {
                    return '<img src="' . asset(json_decode($college->image, true)[0]) . '" alt="college Image" width="180" height="60">';
                } else {
                    return "-no image-";
                }
            })
            ->addColumn('status', function ($college) {

                $success = '<div style="margin: 0 auto; text-align: center;"><a class="btn btn-icon btn-success"
                href="' . route('admin.toggleCollege', $college->id) . '">
                <em class="icon ni ni-power"></em>
                </a></div>';
                $danger = '<div style="margin: 0 auto; text-align: center;"> <a class="btn btn-icon btn-danger"
                href="' . route('admin.toggleCollege', $college->id) . '">
                <em class="icon ni ni-power"></em>
                </a></div>';
                if ($college->is_active == 1)
                    return $success;
                else
                    return $danger;
            })
            ->addColumn('action', function ($college) {

                $html = '<ul class="nk-tb-actions gx-1">
                <li>
                   <div class="drodown"><a href="#"
                       class="dropdown-toggle btn btn-icon btn-trigger"
                       data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                    <div class="dropdown-menu dropdown-menu-end">
                       <ul class="link-list-opt no-bdr">
                           <li>
                               <a href="' . route('admin.editColleges', $college->id) . '">
                                   <em class="icon ni ni-edit"></em>
                                   <span>Edit College</span>
                               </a>
                           </li>
                           <li>
                               <a data-bs-toggle="modal"
                                   data-bs-target="#deleteCollege' . $college->id . '">
                                   <em class="icon ni ni-trash"></em>
                                   <span>Delete College</span></span>
                               </a>
                           </li>
                           </ui>
                           </div>
                           </div>
                           </li>
                           </ui>';

                return $html;
            })
            ->rawColumns(['id', 'name', 'rating', 'description', 'image', 'status', 'action'])
            ->make(true);
    }


    public function getAllReviews()
    {
        $reviews = Review::get();
        return DataTables::of($reviews)
            ->addColumn('id', function ($review) {
                return $review->id;
            })
            ->addColumn('name', function ($review) {
                return $review->name ?? 'Name Not Given';
            })
            ->addColumn('position', function ($review) {
                return $review->position ?? 'Position Not Given';
            })
            ->addColumn('review', function ($review) {
                return $review->review ?? 'Review Not Given';
            })
            ->addColumn('image', function ($review) {
                if ($review->image) {
                    return '<img src="' . asset($review->image) . '" alt="review Image" width="200" height="200">';
                } else {
                    return "-no image-";
                }
            })
            ->addColumn('status', function ($review) {

                $success = '<div style="margin: 0 auto; text-align: center;"> <a class="btn btn-icon btn-success"
                href="' . route('admin.toggleReview', $review->id) . '">
                <em class="icon ni ni-power"></em>
                </a></div>';
                $danger = '<div style="margin: 0 auto; text-align: center;"> <a class="btn btn-icon btn-danger"
                href="' . route('admin.toggleReview', $review->id) . '">
                <em class="icon ni ni-power"></em>
                </a></div>';
                if ($review->is_active == 1)
                    return $success;
                else
                    return $danger;
            })
            ->addColumn('action', function ($review) {
                $html = '<ul class="nk-tb-actions gx-1">
                <li>
                   <div class="drodown"><a href="#"
                       class="dropdown-toggle btn btn-icon btn-trigger"
                       data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                    <div class="dropdown-menu dropdown-menu-end">
                       <ul class="link-list-opt no-bdr">
                           <li>
                               <a href="' . route('admin.editReviews', $review->id) . '">
                                   <em class="icon ni ni-edit"></em>
                                   <span>Edit Review</span>
                               </a>
                           </li>
                           <li>
                               <a data-bs-toggle="modal"
                                   data-bs-target="#deleteReview' . $review->id . '">
                                   <em class="icon ni ni-trash"></em>
                                   <span>Delete Review</span></span>
                               </a>
                           </li>
                       </ul>
                    </div>
                   </div>
                </li>
            </ul>';

                return $html;
            })
            ->rawColumns(['id', 'name', 'position', 'review', 'status', 'image', 'action'])
            ->make(true);
    }


    public function getAllCourses()
    {
        $courses = Course::get();
        return DataTables::of($courses)
            ->addColumn('id', function ($course) {
                return $course->id;
            })
            ->addColumn('name', function ($course) {
                if (isset($course->name))
                    return $course->name;
                else
                    return 'Name Not Given';
            })
            ->addColumn('status', function ($course) {

                $success = '<div style="margin: 0 auto; text-align: center;"><a class="btn btn-icon btn-success"
                href="' . route('admin.toggleCourse', $course->id) . '">
                <em class="icon ni ni-power"></em>
                </a></div>';
                $danger = '<div style="margin: 0 auto; text-align: center;"> <a class="btn btn-icon btn-danger"
                href="' . route('admin.toggleCourse', $course->id) . '">
                <em class="icon ni ni-power"></em>
                </a></div>';
                if ($course->is_active == 1)
                    return $success;
                else
                    return $danger;
            })
            ->addColumn('action', function ($course) {

                $html = '<ul class="nk-tb-actions gx-1 justify-content-center">
                <li>
                   <div class="drodown"><a href="#"
                       class="dropdown-toggle btn btn-icon btn-trigger"
                       data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                    <div class="dropdown-menu dropdown-menu-end">
                       <ul class="link-list-opt no-bdr">
                           <li>
                               <a href="' . route('admin.editCourses', $course->id) . '">
                                   <em class="icon ni ni-edit"></em>
                                   <span>Edit Courses</span>
                               </a>
                           </li>
                           <li>
                               <a data-bs-toggle="modal"
                                   data-bs-target="#deleteCourses' . $course->id . '">
                                   <em class="icon ni ni-trash"></em>
                                   <span>Delete Courses</span></span>
                               </a>
                           </li>
                           </ui>
                           </div>
                           </div>
                           </li>
                           </ui>';

                return $html;
            })
            ->rawColumns(['id', 'name', 'status', 'action'])
            ->make(true);
    }

    public function getAllLocations()
    {

        $locations = Location::get();
        return DataTables::of($locations)
            ->addColumn('id', function ($location) {
                return $location->id;
            })
            ->addColumn('name', function ($location) {
                if (isset($location->name))
                    return $location->name;
                else
                    return 'Name Not Given';
            })
            ->addColumn('status', function ($location) {

                $success = '<div style="margin: 0 auto; text-align: center;"> <a class="btn btn-icon btn-success"
                href="' . route('admin.toggleLocation', $location->id) . '">
                <em class="icon ni ni-power"></em>
                </a></div>';
                $danger = '<div style="margin: 0 auto; text-align: center;"> <a class="btn btn-icon btn-danger"
                href="' . route('admin.toggleLocation', $location->id) . '">
                <em class="icon ni ni-power"></em>
                </a></div>';
                if ($location->is_active == 1)
                    return $success;
                else
                    return $danger;
            })
            ->addColumn('action', function ($location) {

                $html = '<ul class="nk-tb-actions gx-1 justify-content-center">
                <li>
                   <div class="drodown"><a href="#"
                       class="dropdown-toggle btn btn-icon btn-trigger"
                       data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                    <div class="dropdown-menu dropdown-menu-end">
                       <ul class="link-list-opt no-bdr">
                           <li>
                               <a href="' . route('admin.editLocations', $location->id) . '">
                                   <em class="icon ni ni-edit"></em>
                                   <span>Edit location</span>
                               </a>
                           </li>
                           <li>
                               <a data-bs-toggle="modal"
                                   data-bs-target="#deleteLocations' . $location->id . '">
                                   <em class="icon ni ni-trash"></em>
                                   <span>Delete location</span></span>
                               </a>
                           </li>
                           </ui>
                           </div>
                           </div>
                           </li>
                           </ui>';

                return $html;
            })
            ->rawColumns(['id', 'name', 'status', 'action'])
            ->make(true);
    }


    public function getAllSubscriptions(Request $request)
    {
        // dd($request->input());
        $subscriptions = Subscription::with('user', 'plan')->get();
        return DataTables::of($subscriptions)
            ->addColumn('id', function ($subs) {
                return $subs->id;
            })
            ->addColumn('plan', function ($subs) {
                if ($subs->plan)
                    return $subs->plan->name;
                else
                    return "-no plan-";
            })
            ->addColumn('username', function ($subs) {
                if (isset($subs->user->name))
                    return $subs->user->name;
                else
                    return 'Name Not Given';
            })
            ->addColumn('duration', function ($subs) {
                return $subs->duration;
            })

            ->addColumn('insurance_type', function ($subs) {
                if ($subs->insurance_type)
                    return $subs->insurance_type;
                else
                    return "-no type-";
            })
            ->addColumn('start_date', function ($subs) {
                if ($subs->start_date)
                    return $subs->start_date;
                else
                    return "-no date-";
            })
            ->addColumn('end_date', function ($subs) {
                if ($subs->end_date)
                    return $subs->end_date;
                else
                    return "-no date-";
            })
            ->addColumn('payment_status', function ($subs) {

                return "--";
            })


            ->rawColumns(['id', 'plan', 'username', 'duration', 'insurance_type', 'start_date', 'end_date', 'payment_status'])
            ->make(true);
    }



    public function getReportSubscription(Request $request)
    {

        $userid = (isset($request->userId)) ? $request->userId : 'all';
        if ($userid == 'all') {
            $subscriptions = Subscription::with('user', 'plan')->get();
        } else {
            $subscriptions = Subscription::where('user_id', $userid)->with('user', 'plan')->get();
        }

        return DataTables::of($subscriptions)
            ->addColumn('id', function ($subs) {
                return $subs->id;
            })
            ->addColumn('plan', function ($subs) {
                if ($subs->plan)
                    return $subs->plan->name;
                else
                    return "-no plan-";
            })
            ->addColumn('username', function ($subs) {
                if (isset($subs->user->name))
                    return $subs->user->name;
                else
                    return 'Name Not Given';
            })
            ->addColumn('duration', function ($subs) {
                return $subs->duration;
            })

            ->addColumn('insurance_type', function ($subs) {
                if ($subs->insurance_type)
                    return $subs->insurance_type;
                else
                    return "-no type-";
            })
            ->addColumn('start_date', function ($subs) {
                if ($subs->start_date)
                    return $subs->start_date;
                else
                    return "-no date-";
            })
            ->addColumn('end_date', function ($subs) {
                if ($subs->end_date)
                    return $subs->end_date;
                else
                    return "-no date-";
            })
            ->addColumn('payment_status', function ($subs) {

                return "--";
            })


            ->rawColumns(['id', 'plan', 'username', 'duration', 'insurance_type', 'start_date', 'end_date', 'payment_status'])
            ->make(true);
    }
}

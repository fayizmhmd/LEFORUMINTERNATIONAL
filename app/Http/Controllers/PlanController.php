<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function viewPlans()
    {
        $plans = Plan::all();
        return view('admin.plans.viewplans', [
            'plans' => $plans
        ]);
    }
    
    public function addPlan(Request $request){
        $plan               =   new Plan();
        $plan->name         =   $request->name;
        $plan->description  =   $request->description;
        $plan->duration     =   $request->duration;
        $plan->plan_type    =   $request->type;
        $plan->benefits     =   json_encode($request->benefit);
        $plan->save();
        return redirect()->back()->with(['success' => 'Plan Added Successfully']);
    }
    public function editPlan($id)
    {
        $plan = Plan::where('id', $id)->first();
        return view('admin.plans.editplan', [
            'plan' => $plan
        ]);
    }

    public function updatePlan(Request $request){
        $plan = Plan::find($request->id);
        $plan->name         =   $request->name;
        $plan->description  =   $request->description;
        $plan->duration     =   $request->duration;
        $plan->plan_type    =   $request->type;
        $plan->benefits     =   json_encode($request->benefit);
        $plan->save();
        return redirect()->back()->with(['success' => 'Plan Updated Successfully']);
    }

    public function togglePlan($id)
    {
        $plan = Plan::find($id);
        if ($plan) {
            $plan->toggleActive();
            $plan->save();
            return redirect()->back()->with(['success' => 'Status Changed Successfully']);
        } else {
            return redirect()->back()->with(['error' => 'Something Went Wrong']);
        }
    }
    public function deletePlan($id)
    {
        $plan = Plan::find($id);

        if ($plan) {
            $plan->delete();
            return redirect()->back()->with(['success' => 'Plan Deleted Successfully']);
        } else {
            return redirect()->back()->with(['error' => 'Something Went Wrong']);
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Leaves;
use App\Models\LeavesType;
use App\Models\Departments;
use App\Models\Designations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeavesController extends Controller
{
    public function leavesList()
    {
        $leaves=Leaves::where('status','Approved')->orWhere('status','Denied')->get();
        return view('admin.pages.leaves-list',compact('leaves'));
    }

    public function apply(){
        $leaves_types=LeavesType::all();
        return view('admin.pages.leaves-apply',compact('leaves_types'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        

        Leaves::Create([
            //db feild name || form field name
            'name'=>$request->name,
            'email'=>$request->email,
            'leave_type_name'=>$request->leave_type,
            'day'=>$request->day_type,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'days'=>$request->days,
            'reason'=>$request->reason
        ]);
        return redirect()->back()->with('msg','Apply for leave successfully.');
    }

    public function leavesApprove()
    {
        $leaves=Leaves::where('status','Hold')->get();
        return view('admin.pages.leaves-approve',compact('leaves'));
    }

    public function leavesApproveGive($id){
        $leave=Leaves::find($id);
        return view('admin.pages.leaves-approval-give',compact('leave'));
    }

    public function leavesApproveStore(Request $request, $id){
        $leave=Leaves::find($id);

        $leave->update([

            'status'=>$request->approval,
            'feedback'=>$request->feedback
        ]);

        return redirect()->route('admin.leaves.approve')->with('msg','Approval status for leave successfully updated.');
    }

    public function leavesReport()
    {
        $reports=[];
        if(request()->has('fromdate'))
        {
            $from_date=request()->fromdate;
            $to_date=request()->todate;
            
            $reports=Leaves::whereBetween('start_date',[$from_date,$to_date])->get();

        
        }
        return view('admin.pages.leaves-report',compact('reports'));
    }


    public function leavesDetails($id){
        $leave=Leaves::find($id);
        return view('admin.pages.leaves-details',compact('leave'));
    }

    public function leavesEdit($id){
        $leave=Leaves::find($id);
        $leaves_types=LeavesType::all();
        return view('admin.pages.leaves-edit',compact('leave','leaves_types'));
    }

    public function leavesUpdate(Request $request, $id){
        $leave=Leaves::find($id);

        $leave->update([

            //db feild name || form field name
            'name'=>$request->name,
            'email'=>$request->email,
            'leave_type_name'=>$request->leave_type,
            'day'=>$request->day_type,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'days'=>$request->days,
            'reason'=>$request->reason,
            'feedback'=>$request->feedback,
            'status'=>$request->status
        ]);

        return redirect()->route('admin.leaves.list')->with('msg','Leave successfully updated.');
    }

    public function leavesDelete($id){
        Leaves::find($id)->delete();
        return redirect()->route('admin.leaves.list')->with('msg','Leave successfully deleted.');
    }
    
}

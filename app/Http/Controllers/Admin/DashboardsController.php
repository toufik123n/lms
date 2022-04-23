<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Leaves;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardsController extends Controller
{
    public function dashboard()
    {
        $count['employees']=User::all()->count();
        $count['Leaves']=Leaves::all()->count();
        $count['Leaves_pending']=Leaves::where('status','Hold')->count();
        $count['Leaves_approved']=Leaves::where('status','Approved')->count();
        return view('admin.pages.dashboards',compact('count'));
    }
}

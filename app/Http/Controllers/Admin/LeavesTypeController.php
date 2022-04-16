<?php

namespace App\Http\Controllers\Admin;

use App\Models\LeavesType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeavesTypeController extends Controller
{
    public function leavesTypeList()
    {
        $leaves_types=LeavesType::all();
        return view('admin.pages.leaves-type-list',compact('leaves_types'));
    }

    public function add()
    {
        return view('admin.pages.leaves-type-add');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        //server side validation start
        $request->validate([
            'name'=>'unique:leaves_types'
        ]);

        LeavesType::Create([
            //db feild name || form field name
            'name'=>$request->name,
            'description'=>$request->description,
            'credit'=>$request->credit
        ]);
        return redirect()->route('admin.leaves-type.list')->with('msg','Leaves Type added successfully.');
    }
}

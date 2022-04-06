<?php

namespace App\Http\Controllers\Admin;

use App\Models\Designations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DesignationsController extends Controller
{
    public function designationsList()
    {
        $designations=Designations::all();
        return view('admin.pages.designations-list',compact('designations'));
    }

    public function add()
    {
        return view('admin.pages.designations-add');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        //server side validation start
        $request->validate([
            'name'=>'unique:designations'
        ]);

        Designations::Create([
            //db feild name || form field name
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        return redirect()->route('admin.designations.list')->with('msg','Designations added successfully.');
    }
}

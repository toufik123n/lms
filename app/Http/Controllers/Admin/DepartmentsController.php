<?php

namespace App\Http\Controllers\Admin;

use App\Models\Departments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentsController extends Controller
{
    public function departmentsList()
    {
        $departments=Departments::all();
        return view('admin.pages.departments-list',compact('departments'));
    }

    public function add()
    {
        return view('admin.pages.departments-add');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        //server side validation start
        $request->validate([
            'name'=>'unique:departments'
        ]);

        Departments::Create([
            //db feild name || form field name
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        return redirect()->route('admin.departments.list')->with('msg','Department added successfully.');
    }



    public function edit($id){
        $department=Departments::find($id);
        return view('admin.pages.departments-edit',compact('department'));
    }


    public function update(Request $request, $id){
        $department=Departments::find($id);
        // dd($designation);
        $department->update([

            //db feild name || form field name
            'name'=>$request->name,
            'description'=>$request->description
        ]);

        return redirect()->route('admin.departments.list')->with('msg','Department successfully updated.');
    }


    public function delete($id){
        Departments::find($id)->delete();
        return redirect()->route('admin.departments.list')->with('msg','Department successfully deleted.');
    }
}

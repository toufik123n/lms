<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Departments;
use App\Models\Designations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeesController extends Controller
{
    public function employeesList()
    {
        $employees=User::with('department','designation')->where('role','employee')->get();
        return view('admin.pages.employees-list',compact('employees'));
    }

    public function add()
    {
        $departments=Departments::all();
        $designations=Designations::all();
        return view('admin.pages.employees-add',compact('departments','designations'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $filename='';
        //Check Image or not
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/public/uploads',$filename);
        }

        //server side validation start
        $request->validate([
            'email'=>'unique:users',
            'contact'=>'min:11|max:11'
        ]);

        User::Create([
            //db feild name || form field name
            'name'=>$request->name,
            'e_department'=>$request->depatment,
            'e_designation'=>$request->designation,
            'dob'=>$request->dob,
            'contact'=>$request->contact,
            'address'=>$request->address,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'image'=>$filename
        ]);
        return redirect()->route('admin.employees.list')->with('msg','Employee added successfully.');
    }
}

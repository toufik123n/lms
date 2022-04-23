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

    public function edit($id){
        $leaves_type=LeavesType::find($id);
        return view('admin.pages.leaves-type-edit',compact('leaves_type'));
    }

    public function update(Request $request, $id){
        $leaves_type=LeavesType::find($id);

        $leaves_type->update([

            //db feild name || form field name
            'name'=>$request->name,
            'description'=>$request->description,
            'credit'=>$request->credit,
            'status'=>$request->status
        ]);

        return redirect()->route('admin.leaves-type.list')->with('msg','Leaves Type successfully updated.');
    }

    public function delete($id){
        LeavesType::find($id)->delete();
        return redirect()->route('admin.leaves-type.list')->with('msg','Leaves Type successfully deleted.');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function edit($id){
        $user=User::find($id);
        return view('admin.pages.profile-edit',compact('user'));
    }


    public function update(Request $request, $id){
        $user=User::find($id);

        $filename=$user->image;
        //Check Image or not
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }


         //server side validation start
         $request->validate([
            'contact'=>'min:11|max:11'
        ]);



        $user->update([

            //db feild name || form field name
            'name'=>$request->name,
            'dob'=>$request->dob,
            'contact'=>$request->contact,
            'address'=>$request->address,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'image'=>$filename
        ]);

        return redirect()->back()->with('msg','Profile successfully updated.');
    }
}

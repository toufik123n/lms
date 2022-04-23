<?php

namespace App\Http\Controllers\Admin;

use App\Models\WebInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsiteInfoController extends Controller
{
    public function Info()
    {
        $web_infos=WebInfo::all();
        return view('admin.pages.website-info',compact('web_infos'));
    }

    public function add()
    {
        return view('admin.pages.website-info-add');
    } 

    public function store(Request $request)
    {
        // dd($request->all());


        WebInfo::Create([
            //db feild name || form field name
            'name'=>$request->name
        ]);
        return redirect()->route('admin.website-information')->with('msg','Website Information added successfully.');
    }


    public function edit($id){
        $web_info=WebInfo::find($id);
        return view('admin.pages.website-information-edit',compact('web_info'));
    }


    public function update(Request $request, $id){
        $web_info=WebInfo::find($id);

        $web_info->update([

            //db feild name || form field name
            'name'=>$request->name
        ]);

        return redirect()->route('admin.website-information')->with('msg','Website information successfully updated.');
    }


    public function delete($id){
        WebInfo::find($id)->delete();
        return redirect()->route('admin.website-information')->with('msg','Website information successfully deleted.');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeavesTypeController extends Controller
{
    public function LeavesType()
    {
        
        return view('admin.pages.leaves-type.list');
    }
}

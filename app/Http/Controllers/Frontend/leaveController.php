<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class leaveController extends Controller
{
    public function add()
    {
        return view('frontend.leave-add');
    }
    public function type()
    {
        return view('frontend.leave-types');
    }
    public function mange()
    {
        return view('frontend.leave-manage');
    }
}

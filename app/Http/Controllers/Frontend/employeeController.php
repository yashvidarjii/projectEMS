<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function add()
    {
        return view('frontend.employee-add');
    }
    public function mange()
    {
        return view('frontend.employee-mange');
    }
}

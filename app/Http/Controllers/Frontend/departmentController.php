<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class departmentController extends Controller
{
    public function add()
    {
        return view('frontend.add-department');
    }

    public function mange()
    {
        return view('frontend.mange-Department');
    }

}

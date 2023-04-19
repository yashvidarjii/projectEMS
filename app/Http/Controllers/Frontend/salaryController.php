<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class salaryController extends Controller
{
    public function add()
    {
        return view('frontend.salary-add');
    }
}

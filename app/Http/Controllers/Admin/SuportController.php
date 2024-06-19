<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuportController extends Controller
{
    public function index(){
        return view('Admin/Suport/index');
    }
}

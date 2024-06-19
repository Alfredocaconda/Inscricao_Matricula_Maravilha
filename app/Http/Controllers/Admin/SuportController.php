<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Suport;
use Illuminate\Http\Request;

class SuportController extends Controller
{
    public function index(){
        $suports= Suport::all();
        return view('Admin/Suport/index',compact('suports'));
    }
}

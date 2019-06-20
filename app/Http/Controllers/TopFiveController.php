<?php

namespace psfc\Http\Controllers;

use Illuminate\Http\Request;

class TopFiveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.topfive.index');
    }
}

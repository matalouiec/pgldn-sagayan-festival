<?php

namespace psfc\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function index()
    {
        
    }

    public function NotFound()
    {
        return view('error.notfound');
    }
}

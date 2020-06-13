<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    //
    public function index() {
        return view('index');
    }
}

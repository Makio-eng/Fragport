<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function index() {
        return view('brand/index');
    }

    public function info() {
        return view('brand/info');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
  //
  public function index()
  {
    return view('review/index');
  }
  public function info()
  {
    return view('review/info');
  }
}
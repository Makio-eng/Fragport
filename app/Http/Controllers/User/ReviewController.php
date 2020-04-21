<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
  protected function redirectTo($request)
  {
    return route('login');
  }
  //
  public function add()
  {
    return view('user.review.create');
  }
  public function create()
  {
    return redirect('review.index');
  }
}

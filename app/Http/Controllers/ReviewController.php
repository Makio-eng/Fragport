<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfume;
use App\Models\User;

class ReviewController extends Controller
{
  //
  public function index(Request $request)
  {
    $perfume = Perfume::find($request->id);

    return view('review/index', compact('perfume'));
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfume;
use App\Models\Review;
use App\Models\User;

class ReviewController extends Controller
{
  //
  public function index(Request $request)
  {
    $perfume = Perfume::find($request->id);
    $reviews = Review::where('perfume_id', '$request->id')->paginate(18);
    return view('review/index', compact('perfume', 'reviews'));
  }
}

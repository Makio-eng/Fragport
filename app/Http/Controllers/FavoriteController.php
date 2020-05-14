<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Favorite;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
  public function store(Request $request)
  {
    $favorite = new Favorite;
    $favorite->user_id = Auth::user()->id;
    $favorite->review_id = $request->id;
    $favorite->save();
    $review = Review::findOrFail($request->id);
    $perfume_id = $review->perfume_id;
    return redirect()->route('review.index', $parameters = ['id' => $perfume_id]);
  }

  public function destroy(Request $request)
  {
    $review = Review::findOrFail($request->id);
    $favorite = $review->favorite_by($review->id);
    $favorite->delete();
    return redirect()->route('review.index', $parameters = ['id' => $review->perfume_id]);
  }
}

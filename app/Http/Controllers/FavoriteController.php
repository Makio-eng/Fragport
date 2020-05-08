<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;

// class FavoriteController extends Controller
// {
//   public function store(Request $request, $reviewId)
//   {
//     Fovorite::create(
//       array(
//         'user_id' => Auth::user()->id,
//         'review_id' => $reviewId
//       )
//     );

//     $review = Review::findOrFail($reviewId);

//     return redirect()
//       ->action('ReviewController@index', $review->id);
//   }

//   public function destroy($postId, $likeId)
//   {
//     $review = Review::findOrFail($postId);
//     $review->like_by()->findOrFail($likeId)->delete();

//     return redirect()
//       ->action('ReviewController@index', $review->id);
//   }
// }

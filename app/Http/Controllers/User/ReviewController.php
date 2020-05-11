<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perfume;
use App\Models\Review;
use App\Http\Requests\ReviewRequest;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class ReviewController extends Controller
{
  public function add(Request $request)
  {
    $perfume = Perfume::find($request->id);
    return view('user.review.create', compact('perfume'));
  }
  public function create(ReviewRequest $request)
  {
    $review = new Review;
    $review->user_id = Auth::id();
    $review->perfume_id = $request->id;
    $form = $request->all();
    $path = $request->file('reviewImage')->store('public/images');
    $review->reviewImage_path = basename($path);

    $reviewThumb = $request->file('reviewImage');
    $thumb_path = str_random(20) . '.' . $reviewThumb->getClientOriginalExtension();
    Image::make($reviewThumb)->fit(400, 400)->save(public_path('storage/images/' . $thumb_path));
    $review->reviewThumb_path = $thumb_path;

    unset($form['_token']);
    unset($form['reviewImage']);
    $review->fill($form)->save();

    return redirect()->route('review.index', ['id' => $request->id]);
  }


  public function edit(Request $request)
  {
    $review = Review::find($request->id);
    return view('user.review.edit', compact('review'));
  }


  public function update(Request $request)
  {
    $review = Review::find($request->id);
    $form = $request->all();
    if ($request->file('reviewImage')) {
      $path = $request->file('reviewImage')->store('public/images');
      $form['reviewImage_path'] = basename($path);

      $reviewThumb = $request->file('reviewImage');
      $thumb_path = str_random(20) . '.' . $reviewThumb->getClientOriginalExtension();
      Image::make($reviewThumb)->fit(400, 400)->save(public_path('storage/images/' . $thumb_path));
      $review->reviewThumb_path = $thumb_path;
    } else {
      $form['reviewImage_path'] = $review->reviewImage_path;
      $form['reviewThumb_path'] = $review->reviewThumb_path;
    }
    unset($form['reviewImage']);
    unset($form['_token']);
    unset($form['id']);
    $perfume_id = $review->perfume_id;
    $review->fill($form)->save();

    return redirect('user/profile/mypage');
  }


  public function delete(Request $request)
  {
    $review = Review::find($request->id);
    $review->delete();

    return redirect('user/profile/mypage');
  }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perfume;
use App\Models\Review;
use App\Http\Requests\ReviewRequest;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Storage;


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
    // $path = $request->file('reviewImage')->store('public/images');
    // $review->reviewImage_path = basename($path);
    $path = Storage::disk('s3')->putFile('/public/images', $form['reviewImage'], 'public');
    $review->reviewImage_path = Storage::disk('s3')->url($path);


    $reviewThumb = $request->file('reviewImage');
    // $thumb_path = str_random(20) . '.' . $reviewThumb->getClientOriginalExtension();
    // Image::make($reviewThumb)->fit(400, 400)->save(public_path('storage/images/' . $thumb_path));
    // $review->reviewThumb_path = $thumb_path;
    $extension = $request->file('reviewImage')->getClientOriginalExtension();
    $thumbName = str_random(20) . '.' . $extension;
    $resize_img = Image::make($reviewThumb)->fit(400, 400)->encode($extension);
    Storage::disk('s3')->put('/public/images/' . $thumbName, (string) $resize_img, 'public');
    $review->reviewThumb_path = Storage::disk('s3')->url('/public/images/' . $thumbName);

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
      // $path = $request->file('reviewImage')->store('public/images');
      // $form['reviewImage_path'] = basename($path);
      $path = Storage::disk('s3')->putFile('/public/images', $form['reviewImage'], 'public');
      $review->reviewImage_path = Storage::disk('s3')->url($path);

      $reviewThumb = $request->file('reviewImage');
      // $thumb_path = str_random(20) . '.' . $reviewThumb->getClientOriginalExtension();
      // Image::make($reviewThumb)->fit(400, 400)->save(public_path('storage/images/' . $thumb_path));
      // $review->reviewThumb_path = $thumb_path;
      $extension = $request->file('reviewImage')->getClientOriginalExtension();
      $thumbName = str_random(20) . '.' . $extension;
      $resize_img = Image::make($reviewThumb)->fit(400, 400)->encode($extension);
      Storage::disk('s3')->put('/public/images/' . $thumbName, (string) $resize_img, 'public');
      $review->reviewThumb_path = Storage::disk('s3')->url('/public/images/' . $thumbName);
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

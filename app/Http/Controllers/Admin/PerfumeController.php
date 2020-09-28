<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perfume;
use App\Models\Brand;
use App\Http\Requests\PerfumeRequest;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Storage;

class PerfumeController extends Controller
{
  //
  public function info(Request $request)
  {
    $perfume = Perfume::find($request->id);
    return view('admin.perfume.info', compact('perfume'));
  }


  public function add(Request $request)
  {
    $brand = Brand::find($request->id);
    return view('admin.perfume.create', compact('brand'));
  }


  public function create(PerfumeRequest $request)
  {
    $perfumes = new Perfume;
    $form = $request->all();
    $perfumes->admin_id = Auth::id();
    $perfumes->brand_id = $request->id;

    if (isset($form['perfumeImage'])) {
      // $path = $request->file('perfumeImage')->store('public/images');
      // $perfumes->perfumeImage_path = basename($path);
      $path = Storage::disk('s3')->putFile('/public/images', $form['perfumeImage'], 'public');
      $perfumes->perfumeImage_path = Storage::disk('s3')->url($path);

      ////////////サムネイル用↓
      $perfumeThumb = $request->file('perfumeImage');
      //ローカル用
      // $thumb_path = str_random(20) . '.' . $perfumeThumb->getClientOriginalExtension();
      // Image::make($perfumeThumb)->fit(400, 400)->save(public_path('storage/images/' . $thumb_path));
      // $perfume->perfumeThumb_path = $thumb_path;
      $extension = $request->file('perfumeImage')->getClientOriginalExtension();
      $thumbName = str_random(20) . '.' . $extension;
      $resize_img = Image::make($perfumeThumb)->fit(400, 400)->encode($extension);
      Storage::disk('s3')->put('/public/images/' . $thumbName, (string) $resize_img, 'public');
      $perfumes->perfumeThumb_path = Storage::disk('s3')->url('/public/images/' . $thumbName);

      ////////////////////
    } else {
      $perfumes->perfumeImage_path = null;
      $perfumes->perfumeThumb_path = null;
    }
    unset($form['_token']);
    unset($form['perfumeImage']);
    $perfumes->fill($form);
    $perfumes->save();

    return redirect()->route('admin.brand.info', ['id' => $request->id]);
  }


  public function edit(Request $request)
  {
    $perfume = Perfume::find($request->id);
    return view('admin.perfume.edit', compact('perfume'));
  }


  public function update(PerfumeRequest $request)
  {
    $perfume = Perfume::find($request->id);
    $form = $request->all();

    if (isset($form['perfumeImage'])) {
      // $path = $request->file('perfumeImage')->store('public/images');
      // $perfume->perfumeImage_path = basename($path);
      $path = Storage::disk('s3')->putFile('/public/images', $form['perfumeImage'], 'public');
      $perfume->perfumeImage_path = Storage::disk('s3')->url($path);

      /////////////サムネイル
      $perfumeThumb = $request->file('perfumeImage');
      // $thumb_path = str_random(20) . '.' . $perfumeThumb->getClientOriginalExtension();
      // Image::make($perfumeThumb)->fit(400, 400)->save(public_path('storage/images/' . $thumb_path));
      // $perfume->perfumeThumb_path = $thumb_path;
      $extension = $request->file('perfumeImage')->getClientOriginalExtension();
      $thumbName = str_random(20) . '.' . $extension;
      $resize_img = Image::make($perfumeThumb)->fit(400, 400)->encode($extension);
      Storage::disk('s3')->put('/public/images/' . $thumbName, (string) $resize_img, 'public');
      $perfume->perfumeThumb_path = Storage::disk('s3')->url('/public/images/' . $thumbName);

      /////////////////////
      unset($form['perfumeImage']);
    } elseif (isset($request->remove)) {
      $perfume->perfumeImage_path = null;
      $perfume->perfumeThumb_path = null;
      unset($form['remove']);
    }
    unset($form['_token']);
    unset($form['id']);

    $perfume->fill($form)->save();

    return redirect()->route('admin.perfume.info', ['id' => $request->id]);
  }


  public function delete(Request $request)
  {
    $perfume = Perfume::find($request->id);
    $brand_id = $perfume->brand_id;
    $perfume->delete();

    return redirect()->route('admin.brand.info', $parameters = ['id' => $brand_id]);
  }
}

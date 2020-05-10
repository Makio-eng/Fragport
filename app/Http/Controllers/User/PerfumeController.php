<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perfume;
use App\Models\Brand;
use App\Http\Requests\PerfumeRequest;
use Illuminate\Support\Facades\Auth;


class PerfumeController extends Controller
{
  //


  public function add(Request $request)
  {
    $brand = Brand::find($request->id);
    return view('user.perfume.create', compact('brand'));
  }


  public function create(PerfumeRequest $request)
  {
    $perfumes = new Perfume;
    $form = $request->all();
    $perfumes->user_id = Auth::id();
    $perfumes->brand_id = $request->id;

    if (isset($form['perfumeImage'])) {
      $path = $request->file('perfumeImage')->store('public/images');
      $perfumes->perfumeImage_path = basename($path);
    } else {
      $perfumes->perfumeImage_path = null;
    }
    unset($form['_token']);
    unset($form['perfumeImage']);
    $perfumes->fill($form);
    $perfumes->save();

    return redirect()->route('brand.info', ['id' => $request->id]);
  }


  public function edit(Request $request)
  {
    $perfume = Perfume::find($request->id);
    return view('user.perfume.edit', compact('perfume'));
  }


  public function update(Request $request)
  {
    $perfume = Perfume::find($request->id);
    $form = $request->all();

    if (isset($form['perfumeImage'])) {
      $path = $request->file('perfumeImage')->store('public/images');
      $perfume->perfumeImage_path = basename($path);
      unset($form['perfumeImage']);
    } else {
      $form['perfumeImage_path'] = $perfume->perfumeImage_path;
    }
    unset($form['_token']);
    unset($form['perfumeImage']);
    unset($form['id']);

    $perfume->fill($form)->save();

    return redirect()->route('review.index', ['id' => $request->id]);
  }


  public function delete(Request $request)
  {
    $perfume = Perfume::find($request->id);
    $brand_id = $perfume->brand_id;
    $perfume->delete();

    return redirect()->route('brand.info', $parameters = ['id' => $brand_id]);
  }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perfume;
use App\Models\Brand;
use App\Http\Requests\PerfumeRequest;
use Illuminate\Support\Facades\Auth;

class PerfumeController extends Controller
{
  //
  public function info(Request $request)
  {
    $perfume = Perfume::find($request->id);
    // $path = storage_path('app/images/$perfume->perfumeImage_path');
    // $thumb = \Image::make($path);
    // $thumb->crop(300, 300);
    // $perfume->$thumb;
    // dd($perfume);
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
      $path = $request->file('perfumeImage')->store('public/images');
      $perfumes->perfumeImage_path = basename($path);
    } else {
      $perfumes->perfumeImage_path = null;
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
      $path = $request->file('perfumeImage')->store('public/images');
      $perfume->perfumeImage_path = basename($path);
      unset($form['perfumeImage']);
    } elseif (isset($request->remove)) {
      $perfume->perfumeImage_path = null;
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

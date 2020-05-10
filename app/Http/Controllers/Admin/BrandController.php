<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Perfume;
use App\Http\Requests\BrandRequest;
use Illuminate\Support\Facades\Auth;


class BrandController extends Controller
{
  //
  public function index()
  {
    $brands = Brand::getSortedBrands();
    // dd($brands);
    return view('admin.brand.index', compact('brands'));
  }


  public function info(Request $request)
  {
    $brand = Brand::find($request->id);
    // $perfumes = Perfume::where('brand_id', $request->id)->get();
    return view('admin.brand.info', compact('brand'));
  }


  public function add()
  {
    return view('admin.brand.create');
  }


  public function create(BrandRequest $request)
  {
    $brands = new Brand;
    $form = $request->all();
    $brands->admin_id = Auth::id();
    $path = $request->file('brandLogo')->store('public/images');
    $brands->brandLogo_path = basename($path);
    unset($form['_token']);
    unset($form['brandLogo']);
    $brands->fill($form);
    $brands->save();
    return redirect('admin/brand/index');
  }


  public function edit(Request $request)
  {
    $brand = Brand::find($request->id);
    return view('admin.brand.edit', compact('brand'));
  }


  public function update(BrandRequest $request)
  {
    $brand = Brand::find($request->id);
    $form = $request->all();
    if (isset($form['brandLogo'])) {
      $path = $request->file('brandLogo')->store('public/images');
      $brand->brandLogo_path = basename($path);
      unset($form['brandLogo']);
    } else {
      $form['brandLogo_path'] = $brand->brandLogo_path;
    }
    unset($form['_token']);
    unset($form['id']);

    $brand->fill($form)->save();

    return redirect()->route('admin.brand.info', ['id' => $request->id]);
  }


  public function delete(Request $request)
  {
    $brand = Brand::find($request->id);
    $brand->delete();
    return redirect('admin/brand/index');
  }
}

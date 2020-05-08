<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Perfume;
use Illuminate\Http\Request;

class BrandController extends Controller
{
  //
  public function index()
  {
    $brands = Brand::all();
    return view('brand/index', compact('brands'));
  }

  public function info(Request $request)
  {
    $brand = Brand::find($request->id);

    return view('brand/info', compact('brand'));
  }
}

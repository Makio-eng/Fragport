<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
  //
  public function index()
  {
    return view('admin.brand.index');
  }
  public function info()
  {
    return view('admin.brand.info');
  }
  public function add()
  {
    return view('admin.brand.create');
  }
  public function create()
  {
    return view('admin.brand.index');
  }
  public function edit()
  {
    return view('admin.brand.edit');
  }
  public function update()
  {
    return view('admin.brand.index');
  }
  public function delete()
  {
    return view('admin.brand.index');
  }
}

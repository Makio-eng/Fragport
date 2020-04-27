<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerfumeController extends Controller
{
  //
  public function info()
  {
    return view('admin.perfume.info');
  }
  public function add()
  {
    return view('admin.perfume.create');
  }
  public function create()
  {
    return view('admin.brand.info');
  }
  public function edit()
  {
    return view('admin.perfume.edit');
  }
  public function update()
  {
    return view('admin.perfume.info');
  }
  public function delete()
  {
    return view('admin.brand.info');
  }
}

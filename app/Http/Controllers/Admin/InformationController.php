<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
  //
  public function index()
  {
    return view('admin.information.index');
  }

  public function add()
  {
    return view('admin.information.create');
  }

  public function create()
  {
    return view('admin.information.index');
  }

  public function edit()
  {
    return view('admin.information.edit');
  }

  public function update()
  {
    return view('admin.information.index');
  }

  public function delete()
  {
    return view('admin.information.index');
  }
}

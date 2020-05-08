<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;
use Illuminate\Support\Facades\Auth;

class InformationController extends Controller
{
  //
  public function index(Request $request)
  {
    $informations = Information::all()->sortByDesc('created_at');
    return view('admin.information.index', compact('informations'));
  }

  public function add()
  {
    return view('admin.information.create');
  }


  public function create(Request $request)
  {
    $this->validate($request, Information::$rules);
    $informations = new Information;

    $form = $request->all();
    $informations->admin_id = Auth::id();
    $informations->fill($form);
    $informations->save();

    return redirect('admin/information/index');
  }

  public function edit(Request $request)
  {
    $informations = Information::find($request->id);
    return view('admin.information.edit', compact('informations'));
  }

  public function update(Request $request)
  {
    $this->validate($request, Information::$rules);
    $informations = Information::find($request->id);
    $form = $request->all();
    unset($form['_token']);
    unset($form['id']);
    $informations->fill($form)->save();

    return redirect('admin/information/index');
  }

  public function delete(Request $request)
  {
    $information = Information::find($request->id);
    $information->delete();
    return redirect('admin/information/index');
  }
}

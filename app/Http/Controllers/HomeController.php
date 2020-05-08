<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Brand;


class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
    //  * @return void
    //  */
  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */


  public function index()
  {
    $brands = Brand::all();
    $informations = Information::all()->sortByDesc('created_at');
    return view('home', compact('informations', 'brands'));
  }

  public function about()
  {
    return view('about');
  }

  public function information()
  {
    $informations = Information::all()->sortByDesc('created_at');
    return view('information', compact('informations'));
  }
}

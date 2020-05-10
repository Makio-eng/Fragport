<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Brand;
use App\Models\Perfume;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

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
    $informations = Information::all()->sortByDesc('created_at')->take(3);
    $reviews = Review::all()->sortByDesc('created_at')->take(6);
    $brands = Brand::all()->sortByDesc('created_at')->take(6);
    return view('home', compact('informations', 'brands', 'reviews'));
  }

  public function about()
  {
    return view('about');
  }

  public function information()
  {

    $informations = DB::table('information')
      ->select('created_at', 'title', 'body')
      ->orderBy('created_at', 'desc')
      ->paginate(5);

    return view('information', compact('informations'));
  }

  public function search(Request $request)
  {
    $search = $request->search;

    if ($search !== null) {
      if ($request->select == 'brand') {

        $search1 = mb_convert_kana($search, 's');
        $search2 = preg_split('/[\s,]+/', $search1, -1, PREG_SPLIT_NO_EMPTY);
        foreach ($search2 as $value) {
          $brands = Brand::where('name', 'like', '%' . $value . '%')
            ->orWhere('ja_name', 'like', '%' . $value . '%')
            ->get();
        }
        // dd($brands);
        return view('search', compact('brands'));
      } elseif ($request->select == 'perfume') {

        $search1 = mb_convert_kana($search, 's');
        $search2 = preg_split('/[\s,]+/', $search1, -1, PREG_SPLIT_NO_EMPTY);
        foreach ($search2 as $value) {
          $perfumes = Perfume::where('name', 'like', '%' . $value . '%')
            ->orWhere('ja_name', 'like', '%' . $value . '%')
            ->get();
        }
        // dd($perfumes);
        return view('search', compact('perfumes'));
      }
    }
    return view('search');
  }
}

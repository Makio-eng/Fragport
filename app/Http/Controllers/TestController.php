<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

class TestController extends Controller
{

  public function index()
  {
    $values = Test::all();
    //dd($values);
    return view('tests.test', compact('values'));
  }
  public function laravel()
  {
    return view('welcome');
  }
}



/*

・ページネーション
・50音順
・スライド
・画像加工
・リダイレクト
・いいね
・アバウト画面
・デプロイ
・モーダル
・プロフィール
・検索機能
*/

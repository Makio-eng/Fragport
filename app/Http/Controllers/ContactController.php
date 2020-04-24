<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactController extends Controller
{
  //
  public function add()
  {
    return view('contact.create');
  }
  public function confirm(Request $request)
  {
    $this->validate($request, [
      'name'  => 'required',
      'email' => 'required|email',
      'body' => 'required',
    ]);

    $contact = new ContactForm($request->all());

    return view('contact.confirm', compact('contact'));
  }
  public function process(Request $request)
  {
    // ※要バリデーション

    $action = $request->get('action', 'back');
    // 二つ目は初期値です。

    $input = $request->except('action');
    // そして、入力内容からは取り除いておきます。

    if ($action === 'submit') {

      // メール送信処理などを実装

      return view('contact.complete');
    } else {

      // 戻る

      return redirect()->action('ContactController@add')
        ->withInput($input);
    }
  }
}

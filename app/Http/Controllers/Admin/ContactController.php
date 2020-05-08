<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactController extends Controller
{
  //
  public function index()
  {
    $contactForms = ContactForm::all();

    return view('admin.contact.index', ['contactforms' => $contactForms]);
  }

  public function reply(Request $request)
  {
    $contactForms = ContactForm::find($request->id);

    return view('admin.contact.reply', ['contactforms' => $contactForms]);
  }
}
  //   $news = News::find($request->id);
  //   if (empty($news)) {
  //     abort(404);
  //   }
  //   return view('admin.news.edit', ['news_form' => $news]);
  // }

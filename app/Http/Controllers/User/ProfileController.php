<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;
use App\Models\User;
use App\Http\Requests\ProfileRequest;
use Storage;

class ProfileController extends Controller
{
  //
  public function mypage()
  {
    $user = Auth::user();
    return view('user.profile.mypage', compact('user'));
  }

  public function info(Request $request)
  {
    $user = User::find($request->id);
    return view('user.profile.info', compact('user'));
  }


  public function edit(Request $request)
  {
    $user = Auth::user();

    return view('user.profile.edit', compact('user'));
  }

  public function update(ProfileRequest $request)
  {

    $form = $request->all();
    $user = User::find(Auth::id());

    $user->name = $form['name'];
    $user->email = $form['email'];
    $user->save();

    $profile = $user->profile;
    if (null == $profile) {
      $profile = new Profile;
      $profile->user_id = Auth::id();
    }

    if ($request->remove == 'true') {
      $form['userImage_path'] = null;
    } elseif ($request->file('userImage')) {
      // $path = $request->file('userImage')->store('public/images');
      // $form['userImage_path'] = basename($path);
      $path = Storage::disk('s3')->putFile('/public/images', $form['userImage'], 'public');
      $profile->userImage_path = Storage::disk('s3')->url($path);

      //} else {
      //$form['userImage_path'] = $profile->userImage_path;
    }
    unset($form['_token']);
    unset($form['userImage']);
    unset($form['name']);
    unset($form['email']);
    unset($form['remove']);
    $profile->fill($form);
    $profile->save();

    return redirect('user/profile/mypage');
  }
}

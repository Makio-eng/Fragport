<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Review extends Model
{
  //
  protected $guarded = array('id', 'thumb');

  public static function rules()
  {
    return [
      'body' => 'required|string',
    ];
  }


  public function perfume()
  {
    return $this->belongsTo('App\Models\Perfume', 'perfume_id');
  }
  public function user()
  {
    return $this->belongsTo('App\Models\User', 'user_id');
  }

  public function favorites()
  {
    return $this->hasMany('App\Models\Favorite');
  }


  public function favorite_by($review_id)
  {
    if (Auth::check()) {
      return Favorite::where('user_id', Auth::user()->id)
        ->where('review_id', $review_id)
        ->first();
    }
  }

  public function is_favorite($review_id)
  {
    return null != $this->favorite_by($review_id);
  }
}

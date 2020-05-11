<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  //
  protected $guarded = array('id', 'thumb');

  public function perfume()
  {
    return $this->belongsTo('App\Models\Perfume', 'perfume_id');
  }
  public function favorites()
  {
    return $this->hasMany('App\Models\Favorite');
  }
  public function user()
  {
    return $this->belongsTo('App\Models\User', 'user_id');
  }

  public $thumb;

  public static function rules()
  {
    return [
      'body' => 'required|string',
    ];
  }
}

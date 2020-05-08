<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
  //
  protected $guarded = array('id');

  public function brand()
  {
    return $this->belongsTo('App\Models\Brand', 'brand_id');
  }

  public function reviews()
  {
    return $this->hasMany('App\Models\Review');
  }

  public function user()
  {
    return $this->belongsTo('App\Models\User', 'user_id');
  }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
  //
  protected $guarded = array('id');

  public function perfumes()
  {
    return $this->hasMany('App\Models\Perfume');
  }
}

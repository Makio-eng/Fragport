<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
  //
  protected $guarded = array('id');

  public static $rules = array(
    'title' => 'required',
    'body' => 'required',
  );
}

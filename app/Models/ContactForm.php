<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
  //  fillable=記入可能
  protected $fillable = [
    'name',
    'email',
    'body',
  ];
}

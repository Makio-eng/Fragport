<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use kanazaca\CounterCache\CounterCache;

class Favorite extends Model
{
  use CounterCache;

  public $counterCacheOptions = [
    'Review' => [
      'field' => 'likes_count',
      'foreignKey' => 'review_id'
    ]
  ];

  protected $fillable = ['user_id', 'review_id'];

  public function Review()
  {
    return $this->belongsTo('App\Models\Review');
  }

  public function User()
  {
    return $this->belongsTo(User::class);
  }
}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Validation\Rule;

class User extends Authenticatable
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'email', 'password',
  ];

  public static function rules()
  {
    return [
      'name' => 'required|string',
      'email' => ['required', 'email', Rule::unique('users')->ignore($this->email)],
    ];
  }

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];
  public function favorites()
  {
    return $this->hasMany('App\Models\Favorite');
  }
  public function profile()
  {
    return $this->hasOne('App\Models\Profile');
  }
  public function reviews()
  {
    return $this->hasMany('App\Models\Review');
  }
  public function perfumes()
  {
    return $this->hasMany('App\Models\Perfume');
  }
}

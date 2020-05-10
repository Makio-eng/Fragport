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

  public static function getSortedBrands()
  {
    $brands = array(
      'ア' => Brand::whereBetween('ja_name', ['ア%', 'オ％'])->orderBy('ja_name', 'asc')->get(),
      'カ' => Brand::whereBetween('ja_name', ['カ%', 'コ％'])->orderBy('ja_name', 'asc')->get(),
      'サ' => Brand::whereBetween('ja_name', ['サ%', 'ソ％'])->orderBy('ja_name', 'asc')->get(),
      'タ' => Brand::whereBetween('ja_name', ['タ%', 'ト％'])->orderBy('ja_name', 'asc')->get(),
      'ナ' => Brand::whereBetween('ja_name', ['ナ%', 'ノ％'])->orderBy('ja_name', 'asc')->get(),
      'ハ' => Brand::whereBetween('ja_name', ['ハ%', 'ホ％'])->orderBy('ja_name', 'asc')->get(),
      'マ' => Brand::whereBetween('ja_name', ['マ%', 'モ％'])->orderBy('ja_name', 'asc')->get(),
      'ヤ' => Brand::whereBetween('ja_name', ['ヤ%', 'ヨ％'])->orderBy('ja_name', 'asc')->get(),
      'ラ' => Brand::whereBetween('ja_name', ['ラ%', 'ロ％'])->orderBy('ja_name', 'asc')->get(),
      'ワ' => Brand::whereBetween('ja_name', ['ワ%', 'ン％'])->orderBy('ja_name', 'asc')->get(),
    );
    return $brands;
  }
}
// return $this->hasMany('App\Models\Perfume');
    // return $this->hasManyThrough(
    //   'App\Models\Review',
    //   'App\Models\Perfume',
    //   'brand_id',
    //   'perfume_id',
    //   'id',
    //   'id'
    // );

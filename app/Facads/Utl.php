<?php

/**
 * Utlのファサードクラス
 */

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Bladeのビューで利用できるユーティリティ関数を保持するクラス
 */
class Utl extends Facade
{
  protected static function getFacadeAccessor()
  {
    return 'utl';
  }
}

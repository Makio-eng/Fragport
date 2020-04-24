<div class="row">
  <?php

  class FruitClass
  {

    public $fruit = 'Apple';

    //メソッドの宣言
    public function FruitMethod()
    {
      $fruit = 'Grape';

      echo $fruit;
      //Grapeが出力
      echo $this->fruit;
      //Appleが出力
    }
  }

  //インスタンスの生成
  $class = new FruitClass();
  //メソッドの呼出し
  $class->FruitMethod();

  ?>
</div>
@extends('layouts.slick')
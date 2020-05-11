<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfumesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('perfumes', function (Blueprint $table) {
      $table->id();
      $table->string('admin_id')->nullable();
      $table->unsignedBigInteger('brand_id');
      $table->foreign('brand_id')->references('id')->on('brands');
      $table->unsignedBigInteger('user_id')->nullable();
      $table->foreign('user_id')->references('id')->on('users');
      $table->string('name');
      $table->string('ja_name');
      $table->string('rate')->nullable();
      $table->string('note')->nullable();
      $table->string('materials')->nullable();
      $table->string('perfumer')->nullable();
      $table->string('body', 500)->nullable();
      $table->string('perfumeImage_path')->nullable();
      $table->string('perfumeThumb_path')->nullable();
      $table->string('shop_link')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('perfumes');
  }
}

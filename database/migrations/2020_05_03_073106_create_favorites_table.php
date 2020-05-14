<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('favorites', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('user_id');
      // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

      $table->unsignedBigInteger('review_id');
      // $table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade');

      // $table->unique(['user_id', 'review_id']);
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
    Schema::dropIfExists('favorites');
  }
}

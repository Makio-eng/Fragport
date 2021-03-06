<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('brands', function (Blueprint $table) {
      $table->id();
      $table->string('admin_id');
      $table->string('name');
      $table->string('ja_name');
      $table->string('country')->nullable();
      $table->string('link')->nullable();
      $table->string('body', 500)->nullable();
      $table->string('posted_at',)->nullable();
      $table->string('brandLogo_path');
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
    Schema::dropIfExists('brands');
  }
}

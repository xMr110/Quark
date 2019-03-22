<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_path');
            $table->string('company')->nullable();
            $table->integer('partner_id')->nullable();
            $table->integer('category_id');
            $table->string('title');
            $table->text('description');
            $table->text('techInfo');
            $table->string('video_path')->nullable();
            $table->string('pdf_path')->nullable();
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
        Schema::dropIfExists('products');
    }
}

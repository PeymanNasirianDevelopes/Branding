<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExploresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('explores', function (Blueprint $table) {
            $table->id();
            $table->string("head");
            $table->string("title");
            $table->text("content");
            $table->string("image");
            $table->string("left_btn_name");

            $table->string("left_btn_link");
            $table->string("right_btn_name");

            $table->string("right_btn_link");


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
        Schema::dropIfExists('explores');
    }
}

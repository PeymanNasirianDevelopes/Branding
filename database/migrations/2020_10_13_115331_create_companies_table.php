<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("user_id");
            $table->string("title");
            $table->text("keywords")->nullable();
            $table->string("lat");
            $table->string("long");
            $table->string("country");
            $table->string("city");
            $table->text("address");
            $table->string("email");
            $table->string("phone");
            $table->string("website")->nullable();
            $table->string("bg_image")->nullable();
            $table->string("carousel_image")->nullable();
            $table->text("details");
            $table->boolean("booking")->default(0);
            $table->boolean("chatroom")->default(0);
            $table->string("video")->nullable();
            $table->integer("type")->default(0);
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
        Schema::dropIfExists('companies');
    }
}

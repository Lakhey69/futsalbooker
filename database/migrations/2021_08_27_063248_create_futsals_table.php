<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFutsalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('futsals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('futsal_name');
            $table->string('owner_name');
            $table->string('contact');
            $table->string('email');
            $table->string('city');
            $table->string('area');
            $table->string('status')->default('available');
            $table->double('price');
            $table->string('image');
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
        Schema::dropIfExists('futsals');
    }
}

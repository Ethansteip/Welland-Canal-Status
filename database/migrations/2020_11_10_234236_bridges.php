<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bridges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bridge', function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('bridge_id')->unique();
            $table->string('name');
            $table->string('nickname');
            $table->string('location');
            $table->integer('order');
            $table->integer('canal_id');
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
        Schema::dropIfExists('bridge');
    }
}

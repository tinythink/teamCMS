<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_source', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('desc');
            $table->string('thumb')->nullable();
            $table->string('url');
            $table->string('label')->nullable();
            $table->string('author');
            $table->integer('u_id');
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
        Schema::dropIfExists('open_source');
    }
}

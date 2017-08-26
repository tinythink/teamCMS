<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('type')->unique();
            $table->string('url');
            $table->string('grey_url');
            $table->string('module_url');
            $table->string('creator')->comment('开发者');
            $table->string('ideas')->nullable();
            $table->string('shuticon')->nullable();
            $table->string('label')->nullable()->comment('技术标签');
            $table->string('version',30)->nullable()->comment('版本');
            $table->string('mark')->nullable()->comment('备注');
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
        Schema::dropIfExists('pages');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoinNewsSections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('join_news_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('news_id')->index();
            $table->foreign('news_id')->references('id')->on('news');
            $table->unsignedInteger('section_id')->index();
            $table->foreign('section_id')->references('id')->on('section_news');
            $table->unique(['news_id', 'section_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('join_news_sections');
    }
}

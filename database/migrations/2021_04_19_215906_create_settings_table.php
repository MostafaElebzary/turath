<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default("title");
            $table->string('facebook')->default("title");
            $table->string('instagram')->default("title");
            $table->string('twitter')->default("title");
            $table->string('linkedin')->default("title");
            $table->string('logo')->default("logo.png");
            $table->string('phone')->default("123456");
            $table->string('email')->default("logo@logo.com");
            $table->string('website')->default("logo@logo.com");
            $table->string('address')->default("logo@logo.com");
            $table->string('lat')->default("31.32121512121");
            $table->string('lng')->default("31.32121512121");
            $table->string('chart_image')->default("logo.png");
            $table->string('board_directors_pdf')->default("logo.png");

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
        Schema::dropIfExists('settings');
    }
}

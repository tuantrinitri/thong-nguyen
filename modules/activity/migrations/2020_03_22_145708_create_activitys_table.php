<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link', 255);
            $table->string('image')->nullable();
            $table->unsignedInteger('order')->nullable();
            $table->unsignedTinyInteger('status')->default(1);
            $table->timestamps();
        });
        Schema::create('activity_transtions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale', 5)->default('vi');
            $table->unsignedInteger('activity_id');
            $table->string('title', 255);
            $table->text('description')->nullable();
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
        Schema::dropIfExists('activites');
        Schema::dropIfExists('activity_transtions');
    }
}

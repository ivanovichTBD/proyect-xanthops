<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity', function (Blueprint $table) {
            $table->id('id')->unique();
            $table->timestamp('create_date_time')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_date_time')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->bigInteger('user_id')->unique();
            $table->string('type');
            $table->string('device_model');
            $table->string('device_type');
            $table->string('operating_system');
            $table->float('latitude');
            $table->float('longitude');
            $table->string('description');
            $table->bigInteger('artist_id')->unique();
            $table->bigInteger('song_id')->unique();
            $table->bigInteger('album_id')->unique();           
            $table->bigInteger('playlist_id')->unique();   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity');
    }
}

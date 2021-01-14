<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlist', function (Blueprint $table) {
            $table->id('id')->unique();
            $table->timestamp('create_date_time')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_date_time')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->string('name');
            $table->bigInteger('song_id')->unique();
            $table->bigInteger('owner_user_id')->unique();
            $table->bigInteger('tag_id')->unique();
            $table->string('type');
            $table->bigInteger('genre_id')->unique();
            $table->binary('image');
            $table->boolean('is_private');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playlist');
    }
}

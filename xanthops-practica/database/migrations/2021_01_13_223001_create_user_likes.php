<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLikes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_likes', function (Blueprint $table) {
            $table->id('id')->unique();
            $table->timestamp('create_date_time')->default(\DB::raw('CURRENT_TIMESTAMP'))->unique();
            $table->timestamp('updated_date_time')->default(\DB::raw('CURRENT_TIMESTAMP'))->unique();
            $table->bigInteger('user_id')->unique();
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
        Schema::dropIfExists('user_likes');
    }
}

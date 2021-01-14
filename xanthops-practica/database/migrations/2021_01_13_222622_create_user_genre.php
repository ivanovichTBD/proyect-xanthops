<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGenre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_genre', function (Blueprint $table) {
            $table->id('id')->inique();
            $table->timestamp('create_date_time')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_date_time')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->float('genre_count');
            $table->bigInteger('user_id')->unique();
            $table->bigInteger('genre_id')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_genre');
    }
}

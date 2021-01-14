<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubgenre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subgenre', function (Blueprint $table) {
            $table->id('id')->unique();
            $table->timestamp('create_date_time')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_date_time')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->string('name');
            $table->binary('image');
            $table->string('genre_id')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subgenre');
    }
}

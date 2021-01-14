<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaq extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq', function (Blueprint $table) {
            $table->id();
            $table->timestamp('create_date_time')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_date_time')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->string('answer');
            $table->string('question');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq');
    }
}

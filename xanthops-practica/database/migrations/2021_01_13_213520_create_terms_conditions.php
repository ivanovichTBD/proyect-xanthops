<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermsConditions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms_conditions', function (Blueprint $table) {
            $table->id('id');
            $table->timestamp('create_date')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_date')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terms_conditions');
    }
}

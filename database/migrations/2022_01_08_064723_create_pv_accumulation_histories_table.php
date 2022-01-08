<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvAccumulationHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_accumulation_histories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->onDelete('cascade');
            $table->string('earning_type')->nullable();
            $table->integer('available_earned_bonus')->default(0);
            $table->integer('accumulated_earned_bonus')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pv_accumulation_histories');
    }
}

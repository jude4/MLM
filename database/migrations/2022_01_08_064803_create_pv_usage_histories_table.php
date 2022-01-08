<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvUsageHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_usage_histories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->onDelete('cascade');
            $table->string('pv_type');
            $table->integer('type');
            $table->integer('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pv_usage_histories');
    }
}

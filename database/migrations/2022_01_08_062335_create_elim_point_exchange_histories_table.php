<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElimPointExchangeHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elim_point_exchange_histories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->onDelete('cascade');
            $table->integer('elim_points');
            $table->integer('t_points');
            $table->integer('fee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elim_point_exchange_histories');
    }
}

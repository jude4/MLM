<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElimPointTransferHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elim_point_transfer_histories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->onDelete('cascade');
            $table->integer('quantity');
            $table->string('receiver_id')->nullable();
            $table->string('receiver_nickname')->nullable();
            $table->string('sender_id')->nullable();
            $table->string('sender_nickname')->nullable();
            $table->integer('fee')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elim_point_transfer_histories');
    }
}

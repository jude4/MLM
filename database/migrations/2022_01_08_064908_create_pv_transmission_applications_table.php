<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvTransmissionApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_transmission_applications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->onDelete('cascade');
            $table->integer('amount')->default(0);
            $table->boolean('status')->default(false);
            $table->string('incoming_id')->nullable();
            $table->string('receiving_nickname')->nullable();
            $table->integer('quantity');
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
        Schema::dropIfExists('pv_transmission_applications');
    }
}

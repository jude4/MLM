<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradingSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trading_settings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('section_transaction_fee')->default(0);
            $table->float('pursuit_transaction_fee')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trading_settings');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePursueTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pursue_trades', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained('users')
            $table->timestamps();
            $table->foreignId('user_id')->onDelete('cascade');
            $table->string('subject');
            $table->boolean('status')->default(true);
            $table->integer('state')->default(0);
            $table->integer('opertaional_capital');
            $table->float('percentage_yield')->nullable();
            //purchase amounts
            $table->integer('first_purchase_amount')->nullable();
            $table->integer('second_purchase_amount')->nullable();
            $table->integer('third_purchase_amount')->nullable();
            $table->integer('fourth_purchase_amount')->nullable();
            //purchase prices
            $table->integer('first_purchase_price')->nullable();
            $table->integer('second_purchase_price')->nullable();
            $table->integer('third_purchase_price')->nullable();
            $table->integer('fourth_purchase_price')->nullable();
            // average purchase prices
            $table->integer('first_av_purchase_price')->nullable();
            $table->integer('second_av_purchase_price')->nullable();
            $table->integer('third_av_purchase_price')->nullable();
            $table->integer('fourth_av_purchase_price')->nullable();
            //selling prices
            $table->integer('first_selling_price')->nullable();
            $table->integer('second_selling_price')->nullable();
            $table->integer('third_selling_price')->nullable();
            $table->integer('fourth_selling_price')->nullable();
            //currency and segment indicators
            $table->string('currency')->nullable();
            $table->integer('segment_bought')->default(0);
            $table->integer('segment_sold')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pursue_trades');
    }
}
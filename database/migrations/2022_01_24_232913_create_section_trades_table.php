<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_trades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->onDelete('cascade');
            $table->string('subject');
            $table->boolean('status')->default(true);
            $table->integer('state')->default(0);
            $table->integer('starting_price')->nullable();
            $table->integer('amount_by_segment')->nullable();
            $table->float('percentage_yield')->nullable();
            $table->integer('number_of_segments')->nullable();
            $table->integer('first_selling_price')->nullable();
            $table->integer('second_selling_price')->nullable();
            $table->integer('third_selling_price')->nullable();
            $table->integer('fourth_selling_price')->nullable();
            $table->integer('fifth_selling_price')->nullable();
            $table->integer('sixth_selling_price')->nullable();
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
        Schema::dropIfExists('section_trades');
    }
}

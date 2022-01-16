<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('nickname')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('activated')->default(false);
            $table->string('referred_by')->nullable();
            $table->string('user_id')->nullable();
            $table->boolean('status')->default(false);
            $table->integer('type')->default(0);
            $table->integer('pk')->nullable();
            $table->integer('elim_points')->default(0);
            $table->integer('t_points')->default(0);
            $table->integer('earned_pv')->default(0);
            $table->integer('available_pv')->default(0);
            $table->string('upbit_access_key')->nullable();
            $table->string('upbit_secret_key')->nullable();
            $table->string('image')->nullable();
            $table->boolean('resale')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

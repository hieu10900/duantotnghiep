<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('room_id');
            $table->integer('amount_of_people')->nullable();
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->tinyInteger('status')->default(0)->comment('0 - unpaid ; 1- paid ');
            $table->bigInteger('total_money');
            $table->bigInteger('discount_money')->default(0);
            $table->bigInteger('net_money');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}

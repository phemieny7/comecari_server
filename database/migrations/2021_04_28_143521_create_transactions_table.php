<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('driver_id')->constrained('drivers');
            $table->foreignId('shift_id')->constrained('shifts');
            $table->foreignId('package_type_id')->constrained('package_types');
            $table->foreignId('payment_type_id')->constrained('payment_types');
            $table->json('pick_up_address');
            $table->text('delivery_address');
            $table->text('GPS_starting_point');
            $table->text('GPS_middle_point')->nullable();
            $table->text('GPS_destination');
            $table->integer('price');
            $table->integer('kilometer');
            $table->timestamp('estimated_delivery_time');
            $table->timestamp('actual_delivery_time');
            $table->foreignId('status_id')->constrained('statuses');
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
        Schema::dropIfExists('transactions');
    }
}

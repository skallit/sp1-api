<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('numberOfReservation');
            $table->date('date');
            $table->foreignId('typeDay_id')->references('id')->on('type_days')->onDelete('cascade');
            $table->foreignId('typeRoute_id')->references('id')->on('type_routes')->onDelete('cascade');
            $table->foreignId('status_id')->references('id')->on('status_reservations')->onDelete('cascade');
            $table->foreignId('driver_id')->references('id')->on('drivers')->onDelete('cascade');
            $table->foreignId('departureAgency_id')->references('id')->on('agency_sevens')->onDelete('cascade');
            $table->foreignId('returnAgency_id')->nullable()->references('id')->on('agency_sevens')->onDelete('cascade');
            $table->foreignId('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
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
        Schema::dropIfExists('reservations');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties_features', function (Blueprint $table) {
            $table->id();

            $table->string('area')->nullable();
            $table->string('year_build')->nullable();
            $table->integer('bed_rooms')->nullable();
            $table->integer('bath_rooms')->nullable();
            $table->boolean('luggage')->nullable();
            $table->boolean('water')->nullable();
            $table->integer('garage')->nullable();
            $table->integer('stories')->nullable();
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties_features');
    }
};

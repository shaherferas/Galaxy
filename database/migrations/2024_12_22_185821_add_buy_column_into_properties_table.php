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
        Schema::table('properties', function (Blueprint $table) {
            $table->string('image',255)->after('id');
            $table->text('address')->after('id')->nullable();
            $table->boolean('sale')->default(false)->after('id');
            $table->decimal('sale_price', 15, 2)->nullable();
            $table->text('description')->after('id')->nullable();
            $table->string('phone')->after('id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

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
        // Tourism Office Tables
        Schema::create('atop_destinations', function (Blueprint $table) {
            $table->id();
            $table->string('destination_name');
            $table->string('category')->nullable();
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atop_destinations');
    }
};

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
        Schema::create('m__properties', function (Blueprint $table) {
            $table->id();
            $table->string('p_id')->nullable();
            $table->string('property_type')->nullable();
            $table->string('household_role')->nullable();
            $table->string('house_no')->nullable();
            $table->string('nameofbarangay')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m__properties');
    }
};

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
        // Senior Benefits Table
        Schema::create('senior_benefits', function (Blueprint $table) {
            $table->id();
            $table->string('senior_id')->nullable();
            $table->string('benefit_category')->nullable();
            $table->string('benefit_type')->nullable();
            $table->string('nameofbarangay')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('senior_benefits');
    }
};

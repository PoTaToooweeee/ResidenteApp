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
        Schema::create('m_pwds', function (Blueprint $table) {
            $table->id();
            $table->string('p_id')->nullable();
            $table->string('pwd_id')->nullable();
            $table->string('disability_type')->nullable();
            $table->string('cause_of_disability')->nullable();
            $table->string('nameofbarangay')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_pwds');
    }
};

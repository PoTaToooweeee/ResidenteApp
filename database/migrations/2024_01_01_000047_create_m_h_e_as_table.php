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
        Schema::create('m_h_e_as', function (Blueprint $table) {
            $table->id();
            $table->string('p_id')->nullable();
            $table->string('level')->nullable();
            $table->string('school_name')->nullable();
            $table->string('year_graduated')->nullable();
            $table->string('course')->nullable();
            $table->string('nameofbarangay')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_h_e_as');
    }
};

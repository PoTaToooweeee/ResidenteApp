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
        Schema::create('m_curr_occupations', function (Blueprint $table) {
            $table->id();
            $table->string('p_id')->nullable();
            $table->string('occupation')->nullable();
            $table->string('employer')->nullable();
            $table->string('employer_address')->nullable();
            $table->string('monthly_income')->nullable();
            $table->string('nameofbarangay')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_curr_occupations');
    }
};

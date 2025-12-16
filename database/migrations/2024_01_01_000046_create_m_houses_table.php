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
        Schema::create('m_houses', function (Blueprint $table) {
            $table->id();
            $table->string('p_id')->nullable();
            $table->string('house_no')->nullable();
            $table->string('street')->nullable();
            $table->string('purok')->nullable();
            $table->string('house_type')->nullable();
            $table->string('ownership_status')->nullable();
            $table->string('nameofbarangay')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_houses');
    }
};

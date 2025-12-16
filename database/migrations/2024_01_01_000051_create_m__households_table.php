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
        Schema::create('m__households', function (Blueprint $table) {
            $table->id();
            $table->string('p_id')->nullable();
            $table->string('household_no')->nullable();
            $table->string('household_head')->nullable();
            $table->integer('total_members')->nullable();
            $table->string('nameofbarangay')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m__households');
    }
};

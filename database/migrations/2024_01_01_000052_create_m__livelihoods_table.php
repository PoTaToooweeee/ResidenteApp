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
        Schema::create('m__livelihoods', function (Blueprint $table) {
            $table->id();
            $table->string('p_id')->nullable();
            $table->string('type')->nullable();
            $table->string('land_area')->nullable();
            $table->string('mothly_income')->nullable();
            $table->string('owner_type')->nullable();
            $table->string('nameofbarangay')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m__livelihoods');
    }
};

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
        Schema::create('brgy_constituents_vaccines', function (Blueprint $table) {
            $table->id();
            $table->string('nameofbarangay')->nullable();
            $table->string('profile_id')->nullable();
            $table->string('vaccine_name')->nullable();
            $table->date('date_administered')->nullable();
            $table->string('dose_number')->nullable();
            $table->string('facility')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brgy_constituents_vaccines');
    }
};

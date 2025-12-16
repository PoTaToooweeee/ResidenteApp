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
        // Barangay Profile Table
        Schema::create('brgy_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('nameofbarangay')->nullable();
            $table->string('brgy_logo')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email_address')->nullable();
            $table->text('location')->nullable();
            $table->text('history')->nullable();
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brgy_profiles');
    }
};

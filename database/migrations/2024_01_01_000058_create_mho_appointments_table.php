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
        // MHO Appointments Table
        Schema::create('mho_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('appointment_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('patient_name')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('service_type')->nullable();
            $table->date('appointment_date')->nullable();
            $table->string('appointment_time')->nullable();
            $table->string('status')->nullable()->default('pending');
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mho_appointments');
    }
};

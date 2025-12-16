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
        // Citizen Master Profile Table
        Schema::create('m_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('p_id')->nullable();
            $table->string('nameofbarangay')->nullable();
            $table->string('lname')->nullable();
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('ext_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('sex')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('religion')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('email')->nullable();
            $table->string('educational_attainment')->nullable();
            $table->string('occupation')->nullable();
            $table->string('monthly_income')->nullable();
            $table->string('philhealth_no')->nullable();
            $table->string('sss_no')->nullable();
            $table->string('tin_no')->nullable();
            $table->string('voter_status')->nullable();
            $table->string('pwd_status')->nullable();
            $table->string('senior_citizen_status')->nullable();
            $table->string('solo_parent_status')->nullable();
            $table->string('four_ps_status')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_profiles');
    }
};

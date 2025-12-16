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
        // Permits Tables
        Schema::create('bus_permits', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('f_name')->nullable();
            $table->string('m_name')->nullable();
            $table->string('ext_name')->nullable();
            $table->string('sex')->nullable();
            $table->date('dob')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('nationality')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('email_address')->nullable();
            $table->string('tin')->nullable();
            $table->string('sss_no')->nullable();
            $table->string('region')->nullable();
            $table->string('province')->nullable();
            $table->string('citymunicipality')->nullable();
            $table->string('barangay')->nullable();
            $table->string('house_no')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('business_name')->nullable();
            $table->string('trade_name')->nullable();
            $table->string('business_type')->nullable();
            $table->string('business_area')->nullable();
            $table->string('no_of_employees')->nullable();
            $table->string('capitalization')->nullable();
            $table->string('business_region')->nullable();
            $table->string('business_province')->nullable();
            $table->string('business_citymunicipality')->nullable();
            $table->string('business_barangay')->nullable();
            $table->string('business_house_no')->nullable();
            $table->string('business_postal')->nullable();
            $table->string('request_status')->nullable();
            $table->string('application_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_permits');
    }
};

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
        Schema::create('working_permits', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('f_name')->nullable();
            $table->string('m_name')->nullable();
            $table->string('ext_name')->nullable();
            $table->string('sex')->nullable();
            $table->date('dob')->nullable();
            $table->string('house_no')->nullable();
            $table->string('region')->nullable();
            $table->string('province')->nullable();
            $table->string('municipalitycity')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('barangay')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('email_address')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('nationality')->nullable();
            $table->string('acr_no')->nullable();
            $table->date('acr_date')->nullable();
            $table->string('tin')->nullable();
            $table->string('sss_no')->nullable();
            $table->string('medical_certificate_no')->nullable();
            $table->string('police_clearance_no')->nullable();
            $table->string('community_tax_no')->nullable();
            $table->date('ctc_date_issued')->nullable();
            $table->string('ctc_placed_issued')->nullable();
            $table->string('id_image')->nullable();
            $table->string('highest_educational_attainment')->nullable();
            $table->string('institution_last_attended')->nullable();
            $table->string('job_position')->nullable();
            $table->string('employer_company_name')->nullable();
            $table->string('employer_region')->nullable();
            $table->string('employer_province')->nullable();
            $table->string('employer_citymunicipality')->nullable();
            $table->string('employer_street')->nullable();
            $table->string('employer_postal')->nullable();
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
        Schema::dropIfExists('working_permits');
    }
};

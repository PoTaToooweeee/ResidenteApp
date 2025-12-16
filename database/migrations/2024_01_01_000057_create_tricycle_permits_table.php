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
        Schema::create('tricycle_permits', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('f_name')->nullable();
            $table->string('m_name')->nullable();
            $table->string('ext_name')->nullable();
            $table->string('sex')->nullable();
            $table->date('dob')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('region')->nullable();
            $table->string('province')->nullable();
            $table->string('citymunicipality')->nullable();
            $table->string('barangay')->nullable();
            $table->string('house_no')->nullable();
            $table->string('postal_code')->nullable();
            // Driver 1
            $table->string('driver1_name')->nullable();
            $table->string('driver1_address')->nullable();
            $table->string('driver1_license_no')->nullable();
            $table->date('driver1_license_expiry')->nullable();
            $table->string('driver1_franchise_number')->nullable();
            $table->string('driver1_make_model')->nullable();
            $table->string('driver1_plate_number')->nullable();
            $table->string('driver1_chassis_serial')->nullable();
            $table->string('driver1_mv_file')->nullable();
            // Driver 2
            $table->string('driver2_name')->nullable();
            $table->string('driver2_address')->nullable();
            $table->string('driver2_license_no')->nullable();
            $table->string('driver2_license_expiry')->nullable();
            $table->string('driver2_franchise_number')->nullable();
            $table->string('driver2_make_model')->nullable();
            $table->string('driver2_plate_number')->nullable();
            $table->string('driver2_chassis_serial')->nullable();
            $table->string('driver2_mv_file')->nullable();
            // Driver 3
            $table->string('driver3_name')->nullable();
            $table->string('driver3_address')->nullable();
            $table->string('driver3_license_no')->nullable();
            $table->date('driver3_license_expiry')->nullable();
            $table->string('driver3_franchise_number')->nullable();
            $table->string('driver3_make_model')->nullable();
            $table->string('driver3_plate_number')->nullable();
            $table->string('driver3_chassis_serial')->nullable();
            $table->string('driver3_mv_file')->nullable();
            // Driver 4
            $table->string('driver4_name')->nullable();
            $table->string('driver4_address')->nullable();
            $table->string('driver4_license_no')->nullable();
            $table->date('driver4_license_expiry')->nullable();
            $table->string('driver4_franchise_number')->nullable();
            $table->string('driver4_make_model')->nullable();
            $table->string('driver4_plate_number')->nullable();
            $table->string('driver4_chassis_serial')->nullable();
            $table->string('driver4_mv_file')->nullable();
            // Driver 5
            $table->string('driver5_name')->nullable();
            $table->string('driver5_address')->nullable();
            $table->string('driver5_license_no')->nullable();
            $table->date('driver5_license_expiry')->nullable();
            $table->string('driver5_franchise_number')->nullable();
            $table->string('driver5_make_model')->nullable();
            $table->string('driver5_plate_number')->nullable();
            $table->string('driver5_chassis_serial')->nullable();
            $table->string('driver5_mv_file')->nullable();
            
            $table->string('request_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tricycle_permits');
    }
};

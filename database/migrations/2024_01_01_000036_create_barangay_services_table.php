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
        Schema::create('barangay_services', function (Blueprint $table) {
            $table->id();
            $table->string('nameofbarangay')->nullable();
            $table->string('p_id')->nullable();
            $table->string('requestor_name')->nullable();
            $table->string('request_address')->nullable();
            $table->string('type_of_request')->nullable();
            $table->string('purpose_of_request')->nullable();
            $table->string('status')->nullable()->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangay_services');
    }
};

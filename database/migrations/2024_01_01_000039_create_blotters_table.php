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
        Schema::create('blotters', function (Blueprint $table) {
            $table->id();
            $table->string('blotter_id')->nullable();
            $table->string('nameofbarangay')->nullable();
            $table->string('complainant_name')->nullable();
            $table->string('complainant_address')->nullable();
            $table->string('respondent_name')->nullable();
            $table->string('respondent_address')->nullable();
            $table->text('incident')->nullable();
            $table->date('incident_date')->nullable();
            $table->string('incident_place')->nullable();
            $table->string('status')->nullable()->default('pending');
            $table->text('action_taken')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blotters');
    }
};

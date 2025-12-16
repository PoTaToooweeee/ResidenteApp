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
        Schema::create('m_ofws', function (Blueprint $table) {
            $table->id();
            $table->string('p_id')->nullable();
            $table->string('country')->nullable();
            $table->string('job_type')->nullable();
            $table->string('employer')->nullable();
            $table->date('date_deployed')->nullable();
            $table->string('contract_duration')->nullable();
            $table->string('nameofbarangay')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_ofws');
    }
};

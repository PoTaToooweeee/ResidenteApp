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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_id')->nullable();
            $table->string('nameofbarangay')->nullable();
            $table->string('name_of_proj')->nullable();
            $table->string('purpose')->nullable();
            $table->string('target_proponent')->nullable();
            $table->string('duration_start')->nullable();
            $table->string('duration_end')->nullable();
            $table->string('source_of_fund')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

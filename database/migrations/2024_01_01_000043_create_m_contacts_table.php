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
        Schema::create('m_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('p_id')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('relationship')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('address')->nullable();
            $table->string('nameofbarangay')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_contacts');
    }
};

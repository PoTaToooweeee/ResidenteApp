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
        Schema::create('m_family_members', function (Blueprint $table) {
            $table->id();
            $table->string('p_id')->nullable();
            $table->string('member_name')->nullable();
            $table->string('relationship')->nullable();
            $table->date('dob')->nullable();
            $table->string('occupation')->nullable();
            $table->string('nameofbarangay')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_family_members');
    }
};

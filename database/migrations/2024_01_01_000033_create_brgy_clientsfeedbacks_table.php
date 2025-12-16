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
        Schema::create('brgy_clientsfeedbacks', function (Blueprint $table) {
            $table->id();
            $table->string('nameofbarangay')->nullable();
            $table->string('client_name')->nullable();
            $table->string('service')->nullable();
            $table->text('feedback')->nullable();
            $table->integer('rating')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brgy_clientsfeedbacks');
    }
};

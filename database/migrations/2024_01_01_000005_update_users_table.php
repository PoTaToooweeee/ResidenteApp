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
        Schema::table('users', function (Blueprint $table) {
            $table->string('mname')->nullable()->after('name');
            $table->string('lname')->nullable()->after('mname');
            $table->text('nameofbarangay')->nullable()->after('email');
            $table->date('dob')->nullable()->after('nameofbarangay');
            $table->string('online_status', 50)->nullable()->after('remember_token');
            $table->text('locked')->nullable()->after('online_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['mname', 'lname', 'nameofbarangay', 'dob', 'online_status', 'locked']);
        });
    }
};

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
            // Rename 'name' column usage - keep as display name
            $table->string('fname')->nullable()->after('name');
            
            // Add extension name
            $table->string('ext_name', 10)->nullable()->after('lname');
            
            // Add sex
            $table->string('sex', 10)->nullable()->after('dob');
            
            // Add address fields
            $table->string('house_number', 50)->nullable()->after('sex');
            $table->string('zone', 100)->nullable()->after('house_number');
            $table->string('street_address')->nullable()->after('zone');
            
            // Add contact number
            $table->string('contact_number', 20)->nullable()->after('email');
            
            // Add account type
            $table->string('account_type', 50)->default('citizen')->after('contact_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'fname',
                'ext_name',
                'sex',
                'house_number',
                'zone',
                'street_address',
                'contact_number',
                'account_type',
            ]);
        });
    }
};

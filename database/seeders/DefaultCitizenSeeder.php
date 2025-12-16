<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultCitizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Juan Dela Cruz',
            'fname' => 'Juan',
            'mname' => 'Santos',
            'lname' => 'Dela Cruz',
            'email' => 'juan.delacruz@buguey.gov.ph',
            'password' => bcrypt('password123'),
            'nameofbarangay' => 'Barangay 1',
            'dob' => '1985-06-15',
            'online_status' => 1,
            'locked' => 0,
            'email_verified_at' => now()
        ]);

        \App\Models\User::create([
            'name' => 'Maria Santos',
            'fname' => 'Maria',
            'mname' => 'Garcia',
            'lname' => 'Santos',
            'email' => 'maria.santos@buguey.gov.ph',
            'password' => bcrypt('password123'),
            'nameofbarangay' => 'Barangay 2',
            'dob' => '1990-03-22',
            'online_status' => 1,
            'locked' => 0,
            'email_verified_at' => now()
        ]);

        \App\Models\User::create([
            'name' => 'Pedro Ramos',
            'fname' => 'Pedro',
            'mname' => 'Jose',
            'lname' => 'Ramos',
            'email' => 'pedro.ramos@buguey.gov.ph',
            'password' => bcrypt('password123'),
            'nameofbarangay' => 'Barangay 3',
            'dob' => '1975-11-08',
            'online_status' => 1,
            'locked' => 0,
            'email_verified_at' => now()
        ]);
    }
}

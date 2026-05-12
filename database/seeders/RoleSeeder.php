<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['role' => 'admin'],
            ['role' => 'receptionist'],
            ['role' => 'family_doctor'],
            ['role' => 'gynecologist'],
            ['role' => 'pediatrician'],
            ['role' => 'cardiologist'],
            ['role' => 'dermatologist'],
            ['role' => 'orthopedist'],
            ['role' => 'neurologist'],
            ['role' => 'charge_nurse'],
            ['role' => 'nurse'],
            ['role' => 'nurse_technician'],
            ['role' => 'pharmacist'],
            ['role' => 'lab_technician'],
            ['role' => 'radiologist'],
            ['role' => 'pharmacy_technician'],
            ['role' => 'psychiatrist'],
            ['role' => 'psychologist'],
            ['role' => 'physical_therapist'],
            ['role' => 'patient'],
        ];

        foreach ($roles as $role) {
            \App\Models\Role::create($role);
        }
    }
}

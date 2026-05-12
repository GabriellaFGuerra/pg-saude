<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles_services = [
            ['role_id' => 3, 'service_id' => 1],  // family_doctor - General Consultation
            ['role_id' => 3, 'service_id' => 11], // family_doctor - Emergency Care
            ['role_id' => 3, 'service_id' => 14], // family_doctor - Mental Health Services
            ['role_id' => 3, 'service_id' => 16], // family_doctor - Health Screening
            ['role_id' => 3, 'service_id' => 19], // family_doctor - Blood Pressure Monitoring
            ['role_id' => 3, 'service_id' => 20], // family_doctor - Diabetes Management

            ['role_id' => 4, 'service_id' => 6],  // gynecologist - Gynecology
            ['role_id' => 4, 'service_id' => 16], // gynecologist - Health Screening
            ['role_id' => 4, 'service_id' => 21], // gynecologist - Pap Smear

            ['role_id' => 5, 'service_id' => 2],  // pediatrician - Pediatrics
            ['role_id' => 5, 'service_id' => 11], // pediatrician - Emergency Care
            ['role_id' => 5, 'service_id' => 16], // pediatrician - Health Screening

            ['role_id' => 6, 'service_id' => 3],  // cardiologist - Cardiology
            ['role_id' => 6, 'service_id' => 11], // cardiologist - Emergency Care
            ['role_id' => 6, 'service_id' => 16], // cardiologist - Health Screening
            ['role_id' => 6, 'service_id' => 19], // cardiologist - Blood Pressure Monitoring

            ['role_id' => 7, 'service_id' => 4],  // dermatologist - Dermatology
            ['role_id' => 7, 'service_id' => 11], // dermatologist - Emergency Care
            ['role_id' => 7, 'service_id' => 16], // dermatologist - Health Screening

            ['role_id' => 8, 'service_id' => 5],  // orthopedist - Orthopedics
            ['role_id' => 8, 'service_id' => 11], // orthopedist - Emergency Care
            ['role_id' => 8, 'service_id' => 16], // orthopedist - Health Screening

            ['role_id' => 9, 'service_id' => 7],  // neurologist - Neurology
            ['role_id' => 9, 'service_id' => 11], // neurologist - Emergency Care
            ['role_id' => 9, 'service_id' => 14], // neurologist - Mental Health Services
            ['role_id' => 9, 'service_id' => 16], // neurologist - Health Screening

            ['role_id' => 10, 'service_id' => 11], // charge_nurse - Emergency Care
            ['role_id' => 10, 'service_id' => 14], // charge_nurse - Mental Health Services
            ['role_id' => 10, 'service_id' => 16], // charge_nurse - Health Screening
            ['role_id' => 10, 'service_id' => 19], // charge_nurse - Blood Pressure Monitoring
            ['role_id' => 10, 'service_id' => 20], // charge_nurse - Diabetes Management
            ['role_id' => 10, 'service_id' => 21], // charge_nurse - Pap Smear

            ['role_id' => 11, 'service_id' => 11], // nurse - Emergency Care
            ['role_id' => 11, 'service_id' => 14], // nurse - Mental Health Services
            ['role_id' => 11, 'service_id' => 16], // nurse - Health Screening
            ['role_id' => 11, 'service_id' => 19], // nurse - Blood Pressure Monitoring
            ['role_id' => 11, 'service_id' => 20], // nurse - Diabetes Management

            ['role_id' => 12, 'service_id' => 11], // nurse_technician - Emergency Care
            ['role_id' => 12, 'service_id' => 14], // nurse_technician - Mental Health Services
            ['role_id' => 12, 'service_id' => 16], // nurse_technician - Health Screening

            ['role_id' => 13, 'service_id' => 10], // pharmacist - Pharmacy
            ['role_id' => 13, 'service_id' => 16], // pharmacist - Health Screening

            ['role_id' => 14, 'service_id' => 9],  // lab_technician - Laboratory Services

            ['role_id' => 15, 'service_id' => 8],  // radiologist - Radiology
            ['role_id' => 15, 'service_id' => 16], // radiologist - Health Screening
            ['role_id' => 15, 'service_id' => 22], // radiologist - Mammography

            ['role_id' => 16, 'service_id' => 10], // pharmacy_technician - Pharmacy
            ['role_id' => 16, 'service_id' => 16], // pharmacy_technician - Health Screening

            ['role_id' => 17, 'service_id' => 14], // psychiatrist - Mental Health Services
            ['role_id' => 17, 'service_id' => 16], // psychiatrist - Health Screening

            ['role_id' => 18, 'service_id' => 14], // psychologist - Mental Health Services
            ['role_id' => 18, 'service_id' => 16], // psychologist - Health Screening

            ['role_id' => 19, 'service_id' => 13], // physical_therapist - Physical Therapy
            ['role_id' => 19, 'service_id' => 16], // physical_therapist - Health Screening
        ];

        foreach ($roles_services as $rs) {
            \App\Models\Service_Role::create($rs);
        }
    }
}

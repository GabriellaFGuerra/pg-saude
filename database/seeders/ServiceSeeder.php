<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['service_name' => 'General Consultation', 'description' => 'Basic health check-up and consultation.'],
            ['service_name' => 'Pediatrics', 'description' => 'Healthcare services for children.'],
            ['service_name' => 'Cardiology', 'description' => 'Heart-related medical services.'],
            ['service_name' => 'Dermatology', 'description' => 'Skin care and treatment services.'],
            ['service_name' => 'Orthopedics', 'description' => 'Bone and joint care services.'],
            ['service_name' => 'Gynecology', 'description' => 'Women\'s health services.'],
            ['service_name' => 'Neurology', 'description' => 'Nervous system care and treatment.'],
            ['service_name' => 'Radiology', 'description' => 'Medical imaging services.'],
            ['service_name' => 'Laboratory Services', 'description' => 'Diagnostic testing and analysis.'],
            ['service_name' => 'Pharmacy', 'description' => 'Medication dispensing and consultation.'],
            ['service_name' => 'Emergency Care', 'description' => 'Immediate medical attention for urgent health issues.'],
            ['service_name' => 'Surgery', 'description' => 'Operative procedures for various medical conditions.'],
            ['service_name' => 'Physical Therapy', 'description' => 'Rehabilitation services to improve mobility and function.'],
            ['service_name' => 'Mental Health Services', 'description' => 'Counseling and psychiatric care.'],
            ['service_name' => 'Vaccination', 'description' => 'Immunization services to prevent diseases.'],
            ['service_name' => 'Health Screening', 'description' => 'Preventive health check-ups and screenings.'],
            ['service_name' => 'Nutrition Counseling', 'description' => 'Dietary advice and nutrition planning.'],
            ['service_name' => 'Medication Management', 'description' => 'Assistance with medication adherence and management.'],
            ['service_name' => 'Blood Pressure Monitoring', 'description' => 'Regular monitoring of blood pressure levels.'],
            ['service_name' => 'Diabetes Management', 'description' => 'Comprehensive care for diabetes patients.'],
            ['service_name' => 'Pap Smear', 'description' => 'Screening test for cervical cancer.'],
            ['service_name' => 'Mammography', 'description' => 'Breast cancer screening and diagnostic imaging.'],
        ];

        foreach ($services as $service) {
            \App\Models\Service::create($service);
        }
    }
}

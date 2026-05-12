<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lines = file(storage_path('app/addresses.csv'));

        foreach ($lines as $line) {
            $parts = str_getcsv($line);

            $address = Address::create([
                'zip_code'     => $parts[0],
                'street'       => $parts[1],
                'neighborhood' => $parts[3] ?? 'Não informado',
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }
    }
}

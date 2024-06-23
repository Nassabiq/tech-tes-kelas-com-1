<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('packages')->insert(
            [
                [
                    'name' => 'Starter',
                    'benefit' => json_encode(
                        [
                            'LMS + kelas by Kelas.Center',
                            'Up to 5 users',
                            'No charge per user',
                            'Up to 20 pilihan kelas',
                            'Update pergantian kelas / 3 bulan',
                            'Sertifikat',
                            'Konsultasi Gratis',
                            'Dedicated assistant',
                            'Full support 7x24 jam'
                        ]
                    ),
                    'base_price' => 187500,
                    'base_discount' => 10,
                    'icons' => 'starter-package.png',
                    'is_enterprise' => false,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Basic',
                    'benefit' => json_encode(
                        [
                            "LMS + kelas by Kelas.Center",
                            "6-49 users",
                            "No charge per user",
                            "Up to 50 pilihan kelas",
                            "Update pergantian kelas / 3 bulan",
                            "Sertifikat",
                            "Konsultasi Gratis",
                            "Dedicated assistant",
                            "Full support 7x24 jam"
                        ]
                    ),
                    'base_price' => 187500,
                    'base_discount' => 10,
                    'icons' => 'basic-package.png',
                    'is_enterprise' => false,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Pro',
                    'benefit' => json_encode(
                        [
                            "LMS + kelas by Kelas.Center",
                            "50-100 users",
                            "No charge per user",
                            "All Access Class",
                            "Update pergantian kelas / 3 bulan",
                            "Sertifikat",
                            "Konsultasi Gratis",
                            "Dedicated assistant",
                            "Full support 7x24 jam"
                        ]
                    ),
                    'base_price' => 187500,
                    'base_discount' => 10,
                    'icons' => 'basic-package.png',
                    'is_enterprise' => false,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            ]
        );
    }
}

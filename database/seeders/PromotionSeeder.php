<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promotions')->insert(
            [
                [
                    'type' => 'LMS',
                    'title' => 'Optimalkan potensi karyawan Anda dengan Learning Management System (LMS)',
                    'description' => 'Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kamil.',
                    'benefits' => json_encode(
                        [
                            [
                                "title" => "Issued Certificate",
                                "description" => "Berikan kemudahan dalam mengatur dan mendistibusikan sertifikat kepada setiap karyawan."
                            ],
                            [
                                "title" => "On Boarding",
                                "description" => "Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung"
                            ],
                            [
                                "title" => "Training on-demand",
                                "description" => "Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda."
                            ],
                        ]
                    ),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'type' => 'Featured',
                    'title' => 'Berdayakan potensi karyawan Anda dengan Learning Management System (LMS)',
                    'description' => 'Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kamil.',
                    'benefits' => json_encode(
                        [
                            [
                                "title" => "Issued 1",
                                "description" => "Berikan kemudahan dalam mengatur dan mendistibusikan sertifikat kepada setiap karyawan."
                            ],
                            [
                                "title" => "On 1",
                                "description" => "Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung"
                            ],
                            [
                                "title" => "Training 2",
                                "description" => "Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda."
                            ],
                        ]
                    ),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'type' => 'Video Learning + Live Webinar',
                    'title' => 'Berdayakan potensi karyawan Anda dengan Video Learning + Live Webinar',
                    'description' => 'Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kamil.',
                    'benefits' => json_encode(
                        [
                            [
                                "title" => "Issued 3",
                                "description" => "Berikan kemudahan dalam mengatur dan mendistibusikan sertifikat kepada setiap karyawan."
                            ],
                            [
                                "title" => "On 3",
                                "description" => "Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung"
                            ],
                            [
                                "title" => "Training on-demand 3",
                                "description" => "Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda."
                            ],
                        ]
                    ),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'type' => 'Inquiry Learning',
                    'title' => 'Berdayakan potensi karyawan Anda dengan Inquiry Learning',
                    'description' => 'Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kamil.',
                    'benefits' => json_encode(
                        [
                            [
                                "title" => "Issued 4",
                                "description" => "Berikan kemudahan dalam mengatur dan mendistibusikan sertifikat kepada setiap karyawan."
                            ],
                            [
                                "title" => "On 4",
                                "description" => "Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung"
                            ],
                            [
                                "title" => "Training on-demand 4",
                                "description" => "Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda."
                            ],
                        ]
                    ),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            ]
        );
    }
}

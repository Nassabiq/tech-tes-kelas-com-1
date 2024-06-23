<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('videos')->insert([
            [
                'thumbnail' => 'thumbnail.jpg',
                'video_title' => 'Public Speaking: Merdeka Dalam Bicara 1',
                'speaker' => 'Pandji 1',
                'speaker_title' => 'Komika',
                'category' => 'Kelas.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'thumbnail' => 'thumbnail.jpg',
                'video_title' => 'Public Speaking: Merdeka Dalam Bicara 2',
                'speaker' => 'Pandji ',
                'speaker_title' => 'Komika',
                'category' => 'Kelas.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'thumbnail' => 'thumbnail.jpg',
                'video_title' => 'Public Speaking: Merdeka Dalam Bicara 3',
                'speaker' => 'Pandji 1',
                'speaker_title' => 'Komika',
                'category' => 'Kelas.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'thumbnail' => 'thumbnail.jpg',
                'video_title' => 'Public Speaking: Merdeka Dalam Bicara 4',
                'speaker' => 'Pandji 1',
                'speaker_title' => 'Komika',
                'category' => 'Kelas.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'thumbnail' => 'thumbnail.jpg',
                'video_title' => 'Speaking not Public: Merdeka Dalam Bicara 1',
                'speaker' => 'Pandji 2',
                'speaker_title' => 'Presenter',
                'category' => 'Kelas.work',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'thumbnail' => 'thumbnail.jpg',
                'video_title' => 'Speaking not Public: Merdeka Dalam Bicara 2',
                'speaker' => 'Pandji 2',
                'speaker_title' => 'Presenter',
                'category' => 'Kelas.work',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'thumbnail' => 'thumbnail.jpg',
                'video_title' => 'Speaking not Public: Merdeka Dalam Bicara 3',
                'speaker' => 'Pandji 2',
                'speaker_title' => 'Presenter',
                'category' => 'Kelas.work',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'thumbnail' => 'thumbnail.jpg',
                'video_title' => 'Speaking not Public: Merdeka Dalam Bicara 4',
                'speaker' => 'Pandji 2',
                'speaker_title' => 'Presenter',
                'category' => 'Kelas.work',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'thumbnail' => 'thumbnail.jpg',
                'video_title' => 'Pelatihan: Merdeka Dalam Bicara 1',
                'speaker' => 'Pandji 3',
                'speaker_title' => 'Pelawak',
                'category' => 'Bootcamp',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'thumbnail' => 'thumbnail.jpg',
                'video_title' => 'Pelatihan: Merdeka Dalam Bicara 2',
                'speaker' => 'Pandji 3',
                'speaker_title' => 'Pelawak',
                'category' => 'Bootcamp',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'thumbnail' => 'thumbnail.jpg',
                'video_title' => 'Pelatihan: Merdeka Dalam Bicara 3',
                'speaker' => 'Pandji 3',
                'speaker_title' => 'Pelawak',
                'category' => 'Bootcamp',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'thumbnail' => 'thumbnail.jpg',
                'video_title' => 'Pelatihan: Merdeka Dalam Bicara 4',
                'speaker' => 'Pandji 3',
                'speaker_title' => 'Pelawak',
                'category' => 'Bootcamp',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
        //
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Kategori;
use App\Models\Berita;
use App\Models\Komentar;
use App\Models\Quiz;
use App\Models\MateriHoax;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(env('JML_USER'))->create();
        Kategori::factory(env('JML_KATEGORI'))->create();
        Berita::factory(env('JML_BERITA'))->create();
        Komentar::factory(env('JML_KOMENTAR'))->create();
        Quiz::factory(env('JML_QUIZ'))->create();
        MateriHoax::factory(env('JML_MATERI_HOAX'))->create();
    }
}

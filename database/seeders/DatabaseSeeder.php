<?php

namespace Database\Seeders;

use App\Models\Media;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Andi Pratama',
            'email' => 'andi@flipplay.test',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Siti Rahma',
            'email' => 'siti@flipplay.test',
            'password' => Hash::make('password123'),
        ]);

        Media::create([
            'title' => 'Interstellar',
            'type' => 'Movie',
            'genre' => 'Sci-Fi',
            'release_year' => 2014,
            'description' => 'Perjalanan antargalaksi mencari planet layak huni.',
        ]);

        Media::create([
            'title' => 'Attack on Titan',
            'type' => 'Anime',
            'genre' => 'Action',
            'release_year' => 2013,
            'description' => 'Perjuangan umat manusia bertahan hidup di balik tembok raksasa.',
        ]);
    }
}

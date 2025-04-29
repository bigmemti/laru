<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            'Fantasy',
            'Science Fiction',
            'Mystery',
            'Thriller',
            'Romance',
            'Western',
            'Dystopian',
            'Contemporary',
            'Historical Fiction',
            'Horror',
            'Adventure',
            'Young Adult',
            'Children’s',
            'Memoir',
            'Biography',
            'Self-Help',
            'Health',
            'Travel',
            'Guide',
            'Religion',
            'Science',
            'History',
            'Math',
            'Anthology',
            'Poetry',
            'Encyclopedia',
            'Dictionary',
            'Comic',
            'Graphic Novel',
            'Art',
            'Cookbook',
            'Diary',
            'Journal',
            'Prayer',
            'Spirituality',
            'True Crime',
            'Drama',
            'Satire',
            'Political Fiction',
            'Short Story',
            'Crime',
            'Suspense',
            'Apocalyptic',
            'Post-Apocalyptic',
            'Cyberpunk',
            'Steampunk',
            'Urban Fantasy',
            'Paranormal',
            'Epic Fantasy',
            'Space Opera',
        ];

        foreach ($genres as $genre) {
            Genre::create([
                'name' => $genre,
                'slug' => Str::slug($genre),
            ]);
        }
    }
}

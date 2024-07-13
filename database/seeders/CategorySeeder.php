<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=> 'UI/UX',
            'slug'=> "ui-ux",
            'color'=> 'red'
        ]);

        Category::create([
            'name'=> 'Videography',
            'slug'=> "videography",
            'color'=> 'yellow'
        ]);
        Category::create([
            'name'=> 'Video Editing',
            'slug'=> "video-editing",
            'color'=> 'blue'
        ]);
    }
}

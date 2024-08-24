<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $tags = ['Technology', 'Science', 'Health', 'Education'];
    foreach ($tags as $tag) {
        Tag::create(['name' => $tag]);
    }
}

}

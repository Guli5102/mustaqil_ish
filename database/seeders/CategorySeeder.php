<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public static $categories = [
        [
            'slug' => 'editors-choice',
            'name' => "Respublika bolalar kutubxonasi tavsiya etadigan adabiyotlar",
            'description'=>"O'qish uchun tavsiya etiladigan adabiyotlar"
        ],
        [
            
        ]
    ];
    public function run(): void
    {

    }
}

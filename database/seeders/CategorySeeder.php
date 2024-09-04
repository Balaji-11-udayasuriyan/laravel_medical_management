<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [

            ['name' => 'Antibiotics'],
            ['name' => 'Antipyretics'],
            ['name' => 'Antiseptics'],
            ['name' => 'Analgesics'],
            ['name' => 'Antacids'],

        ];

        foreach( $categories as $row )
        {
            Category::create($row);
        }
    }
}

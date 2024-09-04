<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\HealthProductCategory;

class HealthProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $healthproductcategories = [

            ['name' => 'Vitamins & Supplements'],

            ['name' => 'Personal Care'],

            ['name' => 'Fitness'],

            ['name' => 'Medical Equipment'],

            ['name' => 'Skin Care'],

        ];

        foreach ($healthproductcategories as $row) {
            
            HealthProductCategory::create($row);
        }
    }
}

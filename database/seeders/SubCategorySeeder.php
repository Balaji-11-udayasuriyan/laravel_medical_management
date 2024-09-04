<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategories = [
            ['name' => 'Penicillin', 'category_id' => 1],  // Antibiotics (ID: 1)
            ['name' => 'Tetracycline', 'category_id' => 1],  // Antibiotics (ID: 1)
            ['name' => 'Paracetamol', 'category_id' => 2],  // Antipyretics (ID: 2)
            ['name' => 'Ibuprofen', 'category_id' => 2],  // Antipyretics (ID: 2)
            ['name' => 'Hydrogen Peroxide', 'category_id' => 3],  // Antiseptics (ID: 3)
            ['name' => 'Alcohol', 'category_id' => 3],  // Antiseptics (ID: 3)
            ['name' => 'Aspirin', 'category_id' => 4],  // Analgesics (ID: 4)
            ['name' => 'Morphine', 'category_id' => 4],  // Analgesics (ID: 4)
            ['name' => 'Sodium Bicarbonate', 'category_id' => 5],  // Antacids (ID: 5)
            ['name' => 'Magnesium Hydroxide', 'category_id' => 5],  // Antacids (ID: 5)
        ];

        foreach ($subcategories as $row) {
            Subcategory::create($row);
        }
    }
}

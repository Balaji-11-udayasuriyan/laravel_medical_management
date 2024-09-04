<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HealthProductSubCategory;
// use App\Models\HealthProductCategory;

class HealthProductSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Fetching the categories dynamically from the database
        // $devicesCategory = HealthProductCategory::where('name', 'Devices')->first();
        // $supplementsCategory = HealthProductCategory::where('name', 'Supplements')->first();

        // Subcategories for the respective categories
        $healthsubcategories = [
            ['name' => 'Blood Pressure Monitors', 'health_product_category_id' => 1],
            ['name' => 'Thermometers', 'health_product_category_id' =>1],
            ['name' => 'Multivitamins', 'health_product_category_id' => 2],
            ['name' => 'Omega 3 Supplements', 'health_product_category_id' => 4],
        ];

        // Inserting each subcategory into the database
        foreach ($healthsubcategories as $row) {

            HealthProductSubCategory::create($row);
            
        }
    }
}

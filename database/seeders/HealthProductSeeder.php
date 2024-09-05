<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\HealthProduct;

class HealthProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $healthProducts = [
            [
                'health_product_category_id' => 1,
                'health_product_sub_category_id' => 1,
                'name' => 'Digital Blood Pressure Monitor',
                'description' => 'Accurate and easy-to-use digital blood pressure monitor.',
                // 'image_path' => 'images/bp_monitor.jpg',
                'price' => 49.99,
                'stock' => 50,
            ],
            [
                'health_product_category_id' => 1,
                'health_product_sub_category_id' => 2,
                'name' => 'Infrared Thermometer',
                'description' => 'Quick and contactless infrared thermometer.',
                // 'image_path' => 'images/thermometer.jpg',
                'price' => 25.99,
                'stock' => 100,
            ],
            [
                'health_product_category_id' => 2,
                'health_product_sub_category_id' => 3,
                'name' => 'Daily Multivitamins',
                'description' => 'Complete daily multivitamin supplement.',
                // 'image_path' => 'images/multivitamins.jpg',
                'price' => 12.99,
                'stock' => 200,
            ],
            [
                'health_product_category_id' => 2,
                'health_product_sub_category_id' => 3,
                'name' => 'Vitamin C Tablets',
                'description' => 'Boost your immunity with Vitamin C supplements.',
                // 'image_path' => 'images/vitamin_c.jpg',
                'price' => 9.99,
                'stock' => 180,
            ],
            [
                'health_product_category_id' => 4,
                'health_product_sub_category_id' => 4,
                'name' => 'Omega-3 Fish Oil',
                'description' => 'Heart-healthy Omega-3 Fish Oil supplements.',
                // 'image_path' => 'images/omega_3.jpg',
                'price' => 19.99,
                'stock' => 150,
            ],
        ];

        foreach ($healthProducts as $product) {
            HealthProduct::create($product);
        }
    }
}

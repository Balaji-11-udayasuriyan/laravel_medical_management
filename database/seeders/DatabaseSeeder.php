<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        $admin->assignRole('Admin');

        // Create a Doctor user
        $doctor = User::create([
            'name' => 'Doctor User',
            'email' => 'doctor@example.com',
            'password' => Hash::make('admin'),
        ]);
        $doctor->assignRole('Doctor');

        // Create a Pharmacist user
        $pharmacist = User::create([
            'name' => 'Pharmacist User',
            'email' => 'pharmacist@example.com',
            'password' => Hash::make('admin'),
        ]);
        $pharmacist->assignRole('Pharmacist');

        // Create a Customer user
        $customer = User::create([
            'name' => 'Customer User',
            'email' => 'customer@example.com',
            'password' => Hash::make('admin'),
        ]);
        $customer->assignRole('Customer');

        //assign the roles

        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Doctor']);
        Role::create(['name' => 'Pharmacist']);
        Role::create(['name' => 'Customer']);


        $this->call(CategorySeeder::class);
        $this->call(SubCategorySeeder::class);
        $this->call(HealthProductCategorySeeder::class);
        $this->call(HealthProductSubCategorySeeder::class);
        $this->call(HealthProductSeeder::class);
        
    }
}

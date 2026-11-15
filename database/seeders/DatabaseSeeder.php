<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersSeeder::class,
            AdminSeeder::class,
            VehicleCategoriesSeeder::class,
            VehicleSubCategoriesSeeder::class,
            EquipmentCategoriesSeeder::class,
            EquipmentSubCategoriesSeeder::class,
            VehiclesSeeder::class,
            EquipmentsSeeder::class,
            AttachmentsSeeder::class,
        ]);
    }
}

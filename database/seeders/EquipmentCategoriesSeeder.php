<?php

namespace Database\Seeders;

use App\Models\EquipmentCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EquipmentCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['label' => 'Travail du sol', 'value' => 'travail_du_sol'],
            ['label' => 'Semoirs et plantation', 'value' => 'semoirs_plantation'],
            ['label' => 'Pulvérisation et épandage', 'value' => 'pulverisation_epandage'],
            ['label' => 'Fenaison et pressage', 'value' => 'fenaison_pressage'],
            ['label' => 'Irrigation et pompage', 'value' => 'irrigation_pompage'],
            ['label' => 'Récolte et battage', 'value' => 'recolte_battage'],
            ['label' => 'Manutention agricole', 'value' => 'manutention_agricole'],
            ['label' => 'Élevage et stabulation', 'value' => 'elevage_stabulation'],
            ['label' => 'Serres et horticulture', 'value' => 'serres_horticulture'],
        ];

        foreach ($data as $item) {
            EquipmentCategory::create([
                'label' => $item['label'],
                'value' => Str::slug($item['value']),
            ]);
        }
    }
}

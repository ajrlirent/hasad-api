<?php

namespace Database\Seeders;

use App\Models\VehicleCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VehicleCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['label' => 'Tracteurs', 'value' => 'tracteurs'],
            ['label' => 'Moissonneuses-batteuses', 'value' => 'moissonneuses_batteuses'],
            ['label' => 'Ensileuses et récolteuses fourragères', 'value' => 'ensileuses_recolteuses_fourrageres'],
            ['label' => 'Pulvérisateurs automoteurs', 'value' => 'pulverisateurs_automoteurs'],
            ['label' => 'Chargeurs télescopiques', 'value' => 'chargeurs_telescopiques'],
            ['label' => 'Transport et logistique agricole', 'value' => 'transport_logistique_agricole'],
            ['label' => 'Machines de récolte spécialisée', 'value' => 'machines_recolte_specialisee'],
            ['label' => 'Motoculteurs et motopompes', 'value' => 'motoculteurs_motopompes'],
            ['label' => 'Quads et utilitaires agricoles', 'value' => 'quads_utilitaires_agricoles'],
            // IMPORTANT: id 10 must stay "Outils & accessoires" (AttachmentSelectionScreen).
            ['label' => 'Outils et accessoires', 'value' => 'outils_accessoires'],
        ];

        foreach ($data as $item) {
            VehicleCategory::create([
                'label' => $item['label'],
                'value' => Str::slug($item['value']),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\VehicleSubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VehicleSubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // 1 - Tracteurs
            ['category_id' => 1, 'label' => 'Tracteur compact', 'value' => 'tracteur_compact', 'photo' => 'tracteur_compact'],
            ['category_id' => 1, 'label' => 'Tracteur agricole standard', 'value' => 'tracteur_agricole_standard', 'photo' => 'tracteur_agricole_standard'],
            ['category_id' => 1, 'label' => 'Tracteur enjambeur', 'value' => 'tracteur_enjambeur', 'photo' => 'tracteur_enjambeur'],
            ['category_id' => 1, 'label' => 'Tracteur chenillé', 'value' => 'tracteur_chenille', 'photo' => 'tracteur_chenille'],

            // 2 - Moissonneuses-batteuses
            ['category_id' => 2, 'label' => 'Moissonneuse-batteuse conventionnelle', 'value' => 'moissonneuse_batteuse_conventionnelle', 'photo' => 'moissonneuse_batteuse_conventionnelle'],
            ['category_id' => 2, 'label' => 'Moissonneuse-batteuse hybride', 'value' => 'moissonneuse_batteuse_hybride', 'photo' => 'moissonneuse_batteuse_hybride'],
            ['category_id' => 2, 'label' => 'Moissonneuse-batteuse à chenilles', 'value' => 'moissonneuse_batteuse_a_chenilles', 'photo' => 'moissonneuse_batteuse_a_chenilles'],

            // 3 - Ensileuses et récolteuses fourragères
            ['category_id' => 3, 'label' => 'Ensileuse automotrice', 'value' => 'ensileuse_automotrice', 'photo' => 'ensileuse_automotrice'],
            ['category_id' => 3, 'label' => 'Récolteuse-hacheuse', 'value' => 'recolteuse_hacheuse', 'photo' => 'recolteuse_hacheuse'],
            ['category_id' => 3, 'label' => 'Faucheuse-conditionneuse automotrice', 'value' => 'faucheuse_conditionneuse_automotrice', 'photo' => 'faucheuse_conditionneuse_automotrice'],

            // 4 - Pulvérisateurs automoteurs
            ['category_id' => 4, 'label' => 'Pulvérisateur automoteur', 'value' => 'pulverisateur_automoteur', 'photo' => 'pulverisateur_automoteur'],
            ['category_id' => 4, 'label' => 'Pulvérisateur traîné grande largeur', 'value' => 'pulverisateur_traine_grande_largeur', 'photo' => 'pulverisateur_traine_grande_largeur'],

            // 5 - Chargeurs télescopiques
            ['category_id' => 5, 'label' => 'Chargeur télescopique agricole', 'value' => 'chargeur_telescopique_agricole', 'photo' => 'chargeur_telescopique_agricole'],
            ['category_id' => 5, 'label' => 'Télescopique compact', 'value' => 'telescopique_compact', 'photo' => 'telescopique_compact'],
            ['category_id' => 5, 'label' => 'Chargeur sur pneus', 'value' => 'chargeur_sur_pneus', 'photo' => 'chargeur_sur_pneus'],
            ['category_id' => 5, 'label' => 'Chargeur compact chenillé', 'value' => 'chargeur_compact_chenille', 'photo' => 'chargeur_compact_chenille'],

            // 6 - Transport et logistique agricole
            ['category_id' => 6, 'label' => 'Remorque agricole', 'value' => 'remorque_agricole', 'photo' => 'remorque_agricole'],
            ['category_id' => 6, 'label' => 'Benne agricole', 'value' => 'benne_agricole', 'photo' => 'benne_agricole'],
            ['category_id' => 6, 'label' => 'Plateau fourrager', 'value' => 'plateau_fourrager', 'photo' => 'plateau_fourrager'],
            ['category_id' => 6, 'label' => 'Camion de transport de grains', 'value' => 'camion_transport_grains', 'photo' => 'camion_transport_grains'],

            // 7 - Machines de récolte spécialisée
            ['category_id' => 7, 'label' => 'Arracheuse de pommes de terre', 'value' => 'arracheuse_pommes_de_terre', 'photo' => 'arracheuse_pommes_de_terre'],
            ['category_id' => 7, 'label' => 'Arracheuse de betteraves', 'value' => 'arracheuse_betteraves', 'photo' => 'arracheuse_betteraves'],
            ['category_id' => 7, 'label' => 'Récolteuse de fruits', 'value' => 'recolteuse_de_fruits', 'photo' => 'recolteuse_de_fruits'],
            ['category_id' => 7, 'label' => 'Machine à vendanger', 'value' => 'machine_a_vendanger', 'photo' => 'machine_a_vendanger'],

            // 8 - Motoculteurs et motopompes
            ['category_id' => 8, 'label' => 'Motoculteur', 'value' => 'motoculteur', 'photo' => 'motoculteur'],
            ['category_id' => 8, 'label' => 'Motobineuse', 'value' => 'motobineuse', 'photo' => 'motobineuse'],
            ['category_id' => 8, 'label' => 'Motopompe', 'value' => 'motopompe', 'photo' => 'motopompe'],
            ['category_id' => 8, 'label' => 'Débroussailleuse', 'value' => 'debroussailleuse', 'photo' => 'debroussailleuse'],

            // 9 - Quads et utilitaires agricoles
            ['category_id' => 9, 'label' => 'Quad agricole', 'value' => 'quad_agricole', 'photo' => 'quad_agricole'],
            ['category_id' => 9, 'label' => 'Pick-up utilitaire', 'value' => 'pick_up_utilitaire', 'photo' => 'pick_up_utilitaire'],
            ['category_id' => 9, 'label' => 'Buggy de ferme', 'value' => 'buggy_de_ferme', 'photo' => 'buggy_de_ferme'],

            // 10 - Outils et accessoires (obligatoire: id catégorie 10)
            ['category_id' => 10, 'label' => 'Charrue', 'value' => 'charrue', 'photo' => 'charrue'],
            ['category_id' => 10, 'label' => 'Herse', 'value' => 'herse', 'photo' => 'herse'],
            ['category_id' => 10, 'label' => 'Godet agricole', 'value' => 'godet_agricole', 'photo' => 'godet_agricole'],
            ['category_id' => 10, 'label' => 'Fourche à balles', 'value' => 'fourche_a_balles', 'photo' => 'fourche_a_balles'],
            ['category_id' => 10, 'label' => 'Gyrobroyeur', 'value' => 'gyrobroyeur', 'photo' => 'gyrobroyeur'],
            ['category_id' => 10, 'label' => 'Tarière', 'value' => 'tariere', 'photo' => 'tariere'],
        ];

        $photos = [
            1 => 'tracteur_compact',
            2 => 'tracteur_agricole_standard',
            3 => 'tracteur_enjambeur',
            4 => 'tracteur_chenille',
            5 => 'moissonneuse_batteuse_conventionnelle',
            6 => 'moissonneuse_batteuse_hybride',
            7 => 'moissonneuse_batteuse_a_chenilles',
            8 => 'ensileuse_automotrice',
            9 => 'recolteuse_hacheuse',
            10 => 'faucheuse_conditionneuse_automotrice',
            11 => 'pulverisateur_automoteur',
            12 => 'pulverisateur_traine_grande_largeur',
            13 => 'chargeur_telescopique_agricole',
            14 => 'telescopique_compact',
            15 => 'chargeur_sur_pneus',
            16 => 'chargeur_compact_chenille',
            17 => 'remorque_agricole',
            18 => 'benne_agricole',
            19 => 'plateau_fourrager',
            20 => 'camion_de_transport_de_grains',
            21 => 'arracheuse_de_pommes_de_terre',
            22 => 'arracheuse_de_betteraves',
            23 => 'recolteuse_de_fruits',
            24 => 'machine_a_vendanger',
            25 => 'motoculteur',
            26 => 'motobineuse',
            27 => 'motopompe',
            28 => 'debroussailleuse',
            29 => 'quad_agricole',
            30 => 'pick_up_utilitaire',
            31 => 'buggy_de_ferme',
            32 => 'charrue',
            33 => 'herse',
            34 => 'godet_agricole',
            35 => 'fourche_a_balles',
            36 => 'gyrobroyeur',
            37 => 'tariere'
        ];

        $i = 0;
        foreach ($data as $item) {
            $i++;
            VehicleSubCategory::create([
                'category_id' => $item['category_id'],
                'label' => $item['label'],
                'value' => Str::slug($item['value']),
                'photo' => 'public/hasad_machines/' . $photos[$i] . '.png',
            ]);
        }
    }
}

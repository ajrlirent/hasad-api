<?php

namespace Database\Seeders;

use App\Models\EquipmentSubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EquipmentSubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // 1 - Travail du sol
            ['category_id' => 1, 'label' => 'Charrue réversible', 'value' => 'charrue_reversible'],
            ['category_id' => 1, 'label' => 'Herse rotative', 'value' => 'herse_rotative'],
            ['category_id' => 1, 'label' => 'Cultivateur', 'value' => 'cultivateur'],
            ['category_id' => 1, 'label' => 'Rouleau agricole', 'value' => 'rouleau_agricole'],

            // 2 - Semoirs et plantation
            ['category_id' => 2, 'label' => 'Semoir monograine', 'value' => 'semoir_monograine'],
            ['category_id' => 2, 'label' => 'Semoir en ligne', 'value' => 'semoir_en_ligne'],
            ['category_id' => 2, 'label' => 'Planteuse', 'value' => 'planteuse'],

            // 3 - Pulvérisation et épandage
            ['category_id' => 3, 'label' => 'Pulvérisateur porté', 'value' => 'pulverisateur_porte'],
            ['category_id' => 3, 'label' => 'Pulvérisateur traîné', 'value' => 'pulverisateur_traine'],
            ['category_id' => 3, 'label' => 'Épandeur d\'engrais', 'value' => 'epandeur_engrais'],
            ['category_id' => 3, 'label' => 'Distributeur de fumier', 'value' => 'distributeur_de_fumier'],

            // 4 - Fenaison et pressage
            ['category_id' => 4, 'label' => 'Faucheuse', 'value' => 'faucheuse'],
            ['category_id' => 4, 'label' => 'Andaineur', 'value' => 'andaineur'],
            ['category_id' => 4, 'label' => 'Presse à balles rondes', 'value' => 'presse_a_balles_rondes'],
            ['category_id' => 4, 'label' => 'Enrubanneuse', 'value' => 'enrubanneuse'],

            // 5 - Irrigation et pompage
            ['category_id' => 5, 'label' => 'Enrouleur d\'irrigation', 'value' => 'enrouleur_irrigation'],
            ['category_id' => 5, 'label' => 'Pivot d\'irrigation', 'value' => 'pivot_irrigation'],
            ['category_id' => 5, 'label' => 'Motopompe agricole', 'value' => 'motopompe_agricole'],
            ['category_id' => 5, 'label' => 'Asperseur', 'value' => 'asperseur'],

            // 6 - Récolte et battage
            ['category_id' => 6, 'label' => 'Batteuse stationnaire', 'value' => 'batteuse_stationnaire'],
            ['category_id' => 6, 'label' => 'Arracheuse de pommes de terre', 'value' => 'arracheuse_de_pommes_de_terre'],
            ['category_id' => 6, 'label' => 'Récolteuse de betteraves', 'value' => 'recolteuse_de_betteraves'],
            ['category_id' => 6, 'label' => 'Bec cueilleur', 'value' => 'bec_cueilleur'],

            // 7 - Manutention agricole
            ['category_id' => 7, 'label' => 'Chariot élévateur', 'value' => 'chariot_elevateur'],
            ['category_id' => 7, 'label' => 'Transpalette', 'value' => 'transpalette'],
            ['category_id' => 7, 'label' => 'Remorque de manutention', 'value' => 'remorque_de_manutention'],

            // 8 - Élevage et stabulation
            ['category_id' => 8, 'label' => 'Mélangeuse', 'value' => 'melangeuse'],
            ['category_id' => 8, 'label' => 'Pailleuse', 'value' => 'pailleuse'],
            ['category_id' => 8, 'label' => 'Nettoyeur de stabulation', 'value' => 'nettoyeur_de_stabulation'],
            ['category_id' => 8, 'label' => 'Abreuvoir', 'value' => 'abreuvoir'],

            // 9 - Serres et horticulture
            ['category_id' => 9, 'label' => 'Serre tunnel', 'value' => 'serre_tunnel'],
            ['category_id' => 9, 'label' => 'Serre multichapelle', 'value' => 'serre_multichapelle'],
            ['category_id' => 9, 'label' => 'Table de culture', 'value' => 'table_de_culture'],
            ['category_id' => 9, 'label' => 'Système de chauffage', 'value' => 'systeme_de_chauffage'],
        ];

        $photos = [
            1 => 'charrue_reversible',
            2 => 'herse_rotative',
            3 => 'cultivateur',
            4 => 'rouleau_agricole',
            5 => 'semoir_monograine',
            6 => 'semoir_en_ligne',
            7 => 'planteuse',
            8 => 'pulverisateur_porte',
            9 => 'pulverisateur_traine',
            10 => 'epandeur_d_engrais',
            11 => 'distributeur_de_fumier',
            12 => 'faucheuse',
            13 => 'andaineur',
            14 => 'presse_a_balles_rondes',
            15 => 'enrubanneuse',
            16 => 'enrouleur_d_irrigation',
            17 => 'pivot_d_irrigation',
            18 => 'motopompe_agricole',
            19 => 'asperseur',
            20 => 'batteuse_stationnaire',
            21 => 'arracheuse_de_pommes_de_terre',
            22 => 'recolteuse_de_betteraves',
            23 => 'bec_cueilleur',
            24 => 'chariot_elevateur',
            25 => 'transpalette',
            26 => 'remorque_de_manutention',
            27 => 'melangeuse',
            28 => 'pailleuse',
            29 => 'nettoyeur_de_stabulation',
            30 => 'abreuvoir',
            31 => 'serre_tunnel',
            32 => 'serre_multichapelle',
            33 => 'table_de_culture',
            34 => 'systeme_de_chauffage'
        ];

        $i = 0;
        foreach ($data as $item) {
            $i++;
            EquipmentSubCategory::create([
                'category_id' => $item['category_id'],
                'label' => $item['label'],
                'value' => Str::slug($item['value']),
                'photo' => 'public/hasad_machines/' . $photos[$i] . '.png',
            ]);
        }
    }
}

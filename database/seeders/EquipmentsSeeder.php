<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Seeder;

class EquipmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $m = 'public/hasad_machines/';

        $equipmentsData = [
            [
                'category_id' => 1, 'sub_category_id' => 1,
                'brand' => 'Lemken', 'model' => 'Juwel 8', 'year' => 2021,
                'price_per_day' => 7000, 'price_per_month' => 120000,
                'offer_type' => 'negotiable', 'transport_price' => 2500, 'operator_price' => 2500,
                'region' => 'Blida', 'city' => 'Boufarik', 'phone_number' => '0550102030',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 2,
                'photos' => [$m . 'lemken_juwel_8.png'],
            ],
            [
                'category_id' => 1, 'sub_category_id' => 2,
                'brand' => 'Kuhn', 'model' => 'HR 4004', 'year' => 2022,
                'price_per_day' => 6000, 'price_per_month' => 105000,
                'offer_type' => 'fixed', 'transport_price' => 2000, 'operator_price' => 2200,
                'region' => 'Sétif', 'city' => 'El Eulma', 'phone_number' => '0661203040',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 3,
                'photos' => [$m . 'kuhn_hr_4004.png'],
            ],
            [
                'category_id' => 2, 'sub_category_id' => 5,
                'brand' => 'Väderstad', 'model' => 'Tempo V6', 'year' => 2023,
                'price_per_day' => 15000, 'price_per_month' => 260000,
                'offer_type' => 'negotiable', 'transport_price' => 5000, 'operator_price' => 4200,
                'region' => 'Tiaret', 'city' => 'Frenda', 'phone_number' => '0771304050',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 4,
                'photos' => [$m . 'vaderstad_tempo_v6.png'],
            ],
            [
                'category_id' => 2, 'sub_category_id' => 7,
                'brand' => 'Checchi & Magli', 'model' => 'Wolf 4', 'year' => 2020,
                'price_per_day' => 8000, 'price_per_month' => 140000,
                'offer_type' => 'fixed', 'transport_price' => 3000, 'operator_price' => 3000,
                'region' => 'Biskra', 'city' => 'Tolga', 'phone_number' => '0551405060',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 5,
                'photos' => [$m . 'checchi_magli_wolf_4.png'],
            ],
            [
                'category_id' => 3, 'sub_category_id' => 9,
                'brand' => 'Amazone', 'model' => 'UX 4200', 'year' => 2022,
                'price_per_day' => 12000, 'price_per_month' => 210000,
                'offer_type' => 'negotiable', 'transport_price' => 4000, 'operator_price' => 3500,
                'region' => 'Oran', 'city' => 'Es Sénia', 'phone_number' => '0661506070',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 6,
                'photos' => [$m . 'amazone_ux_4200.png'],
            ],
            [
                'category_id' => 3, 'sub_category_id' => 10,
                'brand' => 'Rauch', 'model' => 'Axis 50.2', 'year' => 2021,
                'price_per_day' => 5500, 'price_per_month' => 95000,
                'offer_type' => 'fixed', 'transport_price' => 2000, 'operator_price' => 2000,
                'region' => 'Constantine', 'city' => 'El Khroub', 'phone_number' => '0771607080',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 7,
                'photos' => [$m . 'rauch_axis_50_2.png'],
            ],
            [
                'category_id' => 4, 'sub_category_id' => 12,
                'brand' => 'Krone', 'model' => 'EasyCut 3200', 'year' => 2020,
                'price_per_day' => 6500, 'price_per_month' => 110000,
                'offer_type' => 'negotiable', 'transport_price' => 2500, 'operator_price' => 2500,
                'region' => 'Tizi Ouzou', 'city' => 'Draâ Ben Khedda', 'phone_number' => '0551708090',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 8,
                'photos' => [$m . 'krone_easycut_3200.png'],
            ],
            [
                'category_id' => 4, 'sub_category_id' => 14,
                'brand' => 'New Holland', 'model' => 'Roll-Belt 150', 'year' => 2022,
                'price_per_day' => 11000, 'price_per_month' => 190000,
                'offer_type' => 'fixed', 'transport_price' => 3500, 'operator_price' => 3000,
                'region' => 'Bouira', 'city' => 'Lakhdaria', 'phone_number' => '0661809010',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 9,
                'photos' => [$m . 'new_holland_roll_belt_150.png'],
            ],
            [
                'category_id' => 5, 'sub_category_id' => 16,
                'brand' => 'Irrifrance', 'model' => 'Optima 1100', 'year' => 2021,
                'price_per_day' => 9000, 'price_per_month' => 155000,
                'offer_type' => 'negotiable', 'transport_price' => 3000, 'operator_price' => 2800,
                'region' => 'El Oued', 'city' => 'Guemar', 'phone_number' => '0771901020',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 5,
                'photos' => [$m . 'irrifrance_optima_1100.png'],
            ],
            [
                'category_id' => 6, 'sub_category_id' => 20,
                'brand' => 'CLAAS', 'model' => 'Dominator 98', 'year' => 2018,
                'price_per_day' => 20000, 'price_per_month' => 350000,
                'offer_type' => 'fixed', 'transport_price' => 6000, 'operator_price' => 5000,
                'region' => 'Biskra', 'city' => 'Sidi Okba', 'phone_number' => '0552122232',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 4,
                'photos' => [$m . 'claas_dominator_98.png'],
            ],
            [
                'category_id' => 7, 'sub_category_id' => 24,
                'brand' => 'Manitou', 'model' => 'MI 25', 'year' => 2022,
                'price_per_day' => 13000, 'price_per_month' => 220000,
                'offer_type' => 'negotiable', 'transport_price' => 4000, 'operator_price' => 3500,
                'region' => 'Alger', 'city' => 'Rouiba', 'phone_number' => '0662334455',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 8,
                'photos' => [$m . 'manitou_mi_25.png'],
            ],
            [
                'category_id' => 8, 'sub_category_id' => 27,
                'brand' => 'Kuhn', 'model' => 'Profile 1880', 'year' => 2021,
                'price_per_day' => 10000, 'price_per_month' => 175000,
                'offer_type' => 'fixed', 'transport_price' => 3500, 'operator_price' => 3000,
                'region' => 'Djelfa', 'city' => 'Aïn Oussera', 'phone_number' => '0773445566',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 6,
                'photos' => [$m . 'kuhn_profile_1880.png'],
            ],
            [
                'category_id' => 9, 'sub_category_id' => 31,
                'brand' => 'Richel', 'model' => 'Serre Tunnel 8m', 'year' => 2023,
                'price_per_day' => 7500, 'price_per_month' => 125000,
                'offer_type' => 'negotiable', 'transport_price' => 2500, 'operator_price' => 2200,
                'region' => 'Biskra', 'city' => 'Tolga', 'phone_number' => '0550102030',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 5,
                'photos' => [$m . 'richel_serre_tunnel_8m.png'],
            ],
        ];

        foreach ($equipmentsData as $equipmentData) {
            $equipment = Equipment::create([
                'category_id' => $equipmentData['category_id'],
                'sub_category_id' => $equipmentData['sub_category_id'],
                'brand' => $equipmentData['brand'],
                'model' => $equipmentData['model'],
                'year' => $equipmentData['year'],
                'price_per_day' => $equipmentData['price_per_day'],
                'price_per_month' => $equipmentData['price_per_month'],
                'offer_type' => $equipmentData['offer_type'],
                'transport_price' => $equipmentData['transport_price'],
                'operator_price' => $equipmentData['operator_price'],
                'region' => $equipmentData['region'],
                'city' => $equipmentData['city'],
                'phone_number' => $equipmentData['phone_number'],
                'activity_status' => $equipmentData['activity_status'],
                'approval_status' => $equipmentData['approval_status'],
                'user_id' => $equipmentData['user_id'],
            ]);

            foreach ($equipmentData['photos'] as $photo) {
                $equipment->photos()->create(['path' => $photo]);
            }
        }
    }
}

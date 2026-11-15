<?php

namespace Database\Seeders;

use App\Models\Attachment;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $m = 'public/hasad_machines/';

        $vehiclesData = [
            [
                'category_id' => 1, 'sub_category_id' => 2,
                'brand' => 'John Deere', 'model' => '6120M', 'year' => 2022,
                'price_per_day' => 18000, 'price_per_month' => 320000,
                'offer_type' => 'negotiable', 'transport_price' => 6000, 'operator_price' => 5000,
                'region' => 'Blida', 'city' => 'Boufarik', 'phone_number' => '0550102030',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 2,
                'photos' => [$m . 'john_deere_6120m.png'],
                'attachments' => [32, 33],
            ],
            [
                'category_id' => 1, 'sub_category_id' => 1,
                'brand' => 'Kubota', 'model' => 'M5091', 'year' => 2021,
                'price_per_day' => 14000, 'price_per_month' => 250000,
                'offer_type' => 'fixed', 'transport_price' => 5000, 'operator_price' => 4500,
                'region' => 'Sétif', 'city' => 'El Eulma', 'phone_number' => '0661203040',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 3,
                'photos' => [$m . 'kubota_m5091.png'],
                'attachments' => [32],
            ],
            [
                'category_id' => 2, 'sub_category_id' => 5,
                'brand' => 'Claas', 'model' => 'Lexion 6600', 'year' => 2020,
                'price_per_day' => 65000, 'price_per_month' => 1100000,
                'offer_type' => 'negotiable', 'transport_price' => 18000, 'operator_price' => 12000,
                'region' => 'Tiaret', 'city' => 'Frenda', 'phone_number' => '0771304050',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 4,
                'photos' => [$m . 'claas_lexion_6600.png'],
            ],
            [
                'category_id' => 2, 'sub_category_id' => 7,
                'brand' => 'New Holland', 'model' => 'CR 8.90', 'year' => 2021,
                'price_per_day' => 70000, 'price_per_month' => 1200000,
                'offer_type' => 'fixed', 'transport_price' => 20000, 'operator_price' => 13000,
                'region' => 'Biskra', 'city' => 'Tolga', 'phone_number' => '0551405060',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 5,
                'photos' => [$m . 'new_holland_cr_8_90.png'],
            ],
            [
                'category_id' => 3, 'sub_category_id' => 8,
                'brand' => 'John Deere', 'model' => '8600i', 'year' => 2022,
                'price_per_day' => 55000, 'price_per_month' => 950000,
                'offer_type' => 'negotiable', 'transport_price' => 15000, 'operator_price' => 10000,
                'region' => 'Tizi Ouzou', 'city' => 'Draâ Ben Khedda', 'phone_number' => '0661506070',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 6,
                'photos' => [$m . 'john_deere_8600i.png'],
            ],
            [
                'category_id' => 4, 'sub_category_id' => 11,
                'brand' => 'Case IH', 'model' => 'Patriot 4430', 'year' => 2021,
                'price_per_day' => 48000, 'price_per_month' => 820000,
                'offer_type' => 'fixed', 'transport_price' => 14000, 'operator_price' => 9000,
                'region' => 'Oran', 'city' => 'Es Sénia', 'phone_number' => '0771607080',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 7,
                'photos' => [$m . 'case_ih_patriot_4430.png'],
            ],
            [
                'category_id' => 5, 'sub_category_id' => 13,
                'brand' => 'Manitou', 'model' => 'MLT 737', 'year' => 2022,
                'price_per_day' => 25000, 'price_per_month' => 430000,
                'offer_type' => 'negotiable', 'transport_price' => 7000, 'operator_price' => 6000,
                'region' => 'Constantine', 'city' => 'El Khroub', 'phone_number' => '0551708090',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 8,
                'photos' => [$m . 'manitou_mlt_737.png'],
                'attachments' => [34, 35],
            ],
            [
                'category_id' => 5, 'sub_category_id' => 15,
                'brand' => 'JCB', 'model' => '416S', 'year' => 2020,
                'price_per_day' => 22000, 'price_per_month' => 380000,
                'offer_type' => 'fixed', 'transport_price' => 6000, 'operator_price' => 5000,
                'region' => 'Bouira', 'city' => 'Lakhdaria', 'phone_number' => '0661809010',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 9,
                'photos' => [$m . 'jcb_416s.png'],
                'attachments' => [34],
            ],
            [
                'category_id' => 6, 'sub_category_id' => 17,
                'brand' => 'Krone', 'model' => 'TX 460', 'year' => 2019,
                'price_per_day' => 12000, 'price_per_month' => 210000,
                'offer_type' => 'negotiable', 'transport_price' => 4000, 'operator_price' => 3500,
                'region' => 'Djelfa', 'city' => 'Aïn Oussera', 'phone_number' => '0771901020',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 2,
                'photos' => [$m . 'krone_tx_460.png'],
            ],
            [
                'category_id' => 7, 'sub_category_id' => 21,
                'brand' => 'Grimme', 'model' => 'SE 150-60', 'year' => 2021,
                'price_per_day' => 40000, 'price_per_month' => 700000,
                'offer_type' => 'fixed', 'transport_price' => 12000, 'operator_price' => 8000,
                'region' => 'El Oued', 'city' => 'Guemar', 'phone_number' => '0552122232',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 5,
                'photos' => [$m . 'grimme_se_150_60.png'],
            ],
            [
                'category_id' => 8, 'sub_category_id' => 25,
                'brand' => 'Husqvarna', 'model' => 'T 600', 'year' => 2023,
                'price_per_day' => 4500, 'price_per_month' => 75000,
                'offer_type' => 'fixed', 'transport_price' => 1500, 'operator_price' => 2000,
                'region' => 'Annaba', 'city' => 'El Bouni', 'phone_number' => '0662334455',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 3,
                'photos' => [$m . 'husqvarna_t_600.png'],
            ],
            [
                'category_id' => 9, 'sub_category_id' => 30,
                'brand' => 'Polaris', 'model' => 'Ranger Diesel', 'year' => 2022,
                'price_per_day' => 9000, 'price_per_month' => 150000,
                'offer_type' => 'negotiable', 'transport_price' => 3000, 'operator_price' => 2500,
                'region' => 'Ghardaïa', 'city' => 'El Atteuf', 'phone_number' => '0773445566',
                'activity_status' => 'active', 'approval_status' => 'approved', 'user_id' => 7,
                'photos' => [$m . 'polaris_ranger_diesel.png'],
            ],
        ];

        foreach ($vehiclesData as $vehicleData) {
            $vehicle = Vehicle::create([
                'category_id' => $vehicleData['category_id'],
                'sub_category_id' => $vehicleData['sub_category_id'],
                'brand' => $vehicleData['brand'],
                'model' => $vehicleData['model'],
                'year' => $vehicleData['year'],
                'price_per_day' => $vehicleData['price_per_day'],
                'price_per_month' => $vehicleData['price_per_month'],
                'offer_type' => $vehicleData['offer_type'],
                'transport_price' => $vehicleData['transport_price'],
                'operator_price' => $vehicleData['operator_price'],
                'region' => $vehicleData['region'],
                'city' => $vehicleData['city'],
                'phone_number' => $vehicleData['phone_number'],
                'activity_status' => $vehicleData['activity_status'],
                'approval_status' => $vehicleData['approval_status'],
                'user_id' => $vehicleData['user_id'],
            ]);

            foreach ($vehicleData['photos'] as $photo) {
                $vehicle->photos()->create(['path' => $photo]);
            }

            if (isset($vehicleData['attachments'])) {
                foreach ($vehicleData['attachments'] as $subCategoryId) {
                    $vehicle->attachments()->create([
                        'sub_category_id' => $subCategoryId,
                        'price' => 2500,
                    ]);

                    Attachment::create([
                        'sub_category_id' => $subCategoryId,
                        'activity_status' => 'active',
                        'approval_status' => 'not_approved',
                        'user_id' => $vehicleData['user_id'],
                    ]);
                }
            }
        }
    }
}

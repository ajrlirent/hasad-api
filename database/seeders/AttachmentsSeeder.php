<?php

namespace Database\Seeders;

use App\Models\Attachment;
use Illuminate\Database\Seeder;

class AttachmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $m = 'public/hasad_machines/';

        $attachmentsData = [
            [
                'sub_category_id' => 32, 'brand' => 'Lemken', 'model' => 'Juwel 8',
                'year' => 2021, 'price_per_day' => 5000, 'price_per_month' => 85000,
                'offer_type' => 'fixed', 'transport_price' => 2000,
                'region' => 'Blida', 'city' => 'Boufarik', 'phone_number' => '0550102030',
                'photos' => [$m . 'lemken_juwel_8.png'],
            ],
            [
                'sub_category_id' => 33, 'brand' => 'Kuhn', 'model' => 'HR 3003',
                'year' => 2020, 'price_per_day' => 4200, 'price_per_month' => 72000,
                'offer_type' => 'negotiable', 'transport_price' => 1800,
                'region' => 'Sétif', 'city' => 'El Eulma', 'phone_number' => '0661203040',
                'photos' => [$m . 'kuhn_hr_3003.png'],
            ],
            [
                'sub_category_id' => 34, 'brand' => 'Manitou', 'model' => 'Godet 2m³',
                'year' => 2022, 'price_per_day' => 3500, 'price_per_month' => 60000,
                'offer_type' => 'fixed', 'transport_price' => 1500,
                'region' => 'Constantine', 'city' => 'El Khroub', 'phone_number' => '0551708090',
                'photos' => [$m . 'manitou_godet_2m3.png'],
            ],
            [
                'sub_category_id' => 35, 'brand' => 'JCB', 'model' => 'Fourche balles',
                'year' => 2021, 'price_per_day' => 3000, 'price_per_month' => 52000,
                'offer_type' => 'fixed', 'transport_price' => 1200,
                'region' => 'Bouira', 'city' => 'Lakhdaria', 'phone_number' => '0661809010',
                'photos' => [$m . 'jcb_fourche_balles.png'],
            ],
            [
                'sub_category_id' => 36, 'brand' => 'Kuhn', 'model' => 'BP 240',
                'year' => 2022, 'price_per_day' => 4500, 'price_per_month' => 78000,
                'offer_type' => 'negotiable', 'transport_price' => 1800,
                'region' => 'Tizi Ouzou', 'city' => 'Draâ Ben Khedda', 'phone_number' => '0771607080',
                'photos' => [$m . 'kuhn_bp_240.png'],
            ],
            [
                'sub_category_id' => 37, 'brand' => 'Auger', 'model' => 'TA 300',
                'year' => 2021, 'price_per_day' => 3200, 'price_per_month' => 55000,
                'offer_type' => 'fixed', 'transport_price' => 1200,
                'region' => 'Djelfa', 'city' => 'Aïn Oussera', 'phone_number' => '0773445566',
                'photos' => [$m . 'auger_ta_300.png'],
            ],
        ];

        foreach ($attachmentsData as $attachmentData) {
            $attachment = Attachment::create([
                'sub_category_id' => $attachmentData['sub_category_id'],
                'brand' => $attachmentData['brand'],
                'model' => $attachmentData['model'],
                'year' => $attachmentData['year'],
                'price_per_day' => $attachmentData['price_per_day'],
                'price_per_month' => $attachmentData['price_per_month'],
                'offer_type' => $attachmentData['offer_type'],
                'transport_price' => $attachmentData['transport_price'],
                'region' => $attachmentData['region'],
                'city' => $attachmentData['city'],
                'phone_number' => $attachmentData['phone_number'],
                'activity_status' => 'active',
                'approval_status' => 'approved',
                'user_id' => 1,
            ]);

            foreach ($attachmentData['photos'] as $photo) {
                $attachment->photos()->create(['path' => $photo]);
            }
        }
    }
}

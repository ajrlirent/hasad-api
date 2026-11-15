<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Seed the HASAD back-office account.
     */
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@hasad.local'],
            [
                'first_name' => 'HASAD',
                'last_name' => 'Admin',
                'phone' => '0000000000',
                'user_type' => 'admin',
                'receive_notifications_from' => 'both',
                'password' => Hash::make('admin123'),
                'profile_picture' => 'public/users/pfps/pfp-00.jpg',
            ]
        );

        if ($admin->documents()->count() === 0) {
            $admin->documents()->create(['path' => 'public/users/documents/doc-0.pdf']);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\mobilepos_configuration;
use App\Models\ticket_details;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'username' => 'admin',
            'password' => 'admin',
            'user_type' => 'admin',

        ]);
        
        ticket_details::create(
            [
                'title' => 'Parking Ticket',
                'toilet_title' => 'Toilet Ticket',
                'company_name' => 'BMWARE',
                'company_address' => 'Del Pilars, City of San Fernando Pampanga',
                'footer' => 'This is an official receipt, please keep for an inspection'

            ]);

            mobilepos_configuration::create(
                [
                    'apitime_scheduling' => 'Parking Ticket',
                    'parking_rate' => '15',
                    'toilet_rate' => '10'
                ]);
    }
}

<?php

namespace Modules\MedicalCenter\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\MedicalCenter\Models\MedicalCenter;

class MedicalCenterDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate the table before seeding
        DB::table('medicalcenters')->truncate();

        // Seed the table with 50 records
        MedicalCenter::factory()->count(50)->create();

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
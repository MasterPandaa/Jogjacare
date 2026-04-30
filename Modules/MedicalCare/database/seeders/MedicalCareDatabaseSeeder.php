<?php

namespace Modules\MedicalCare\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\MedicalCare\Models\MedicalCare;

class MedicalCareDatabaseSeeder extends Seeder
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
        DB::table('medicalcares')->truncate();

        // Seed the table with 50 records
        MedicalCare::factory()->count(50)->create();

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
<?php

namespace Modules\MedicalCost\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\MedicalCost\Models\MedicalCost;

class MedicalCostDatabaseSeeder extends Seeder
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

        /*
         * MedicalCosts Seed
         * ------------------
         */

        // DB::table('medicalcosts')->truncate();
        // echo "Truncate: medicalcosts \n";

        MedicalCost::factory()->count(20)->create();
        $rows = MedicalCost::all();
        echo " Insert: medicalcosts \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
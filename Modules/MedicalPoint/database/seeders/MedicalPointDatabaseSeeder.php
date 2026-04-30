<?php

namespace Modules\MedicalPoint\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\MedicalPoint\Models\MedicalPoint;

class MedicalPointDatabaseSeeder extends Seeder
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
         * MedicalPoints Seed
         * ------------------
         */

        // DB::table('medicalpoints')->truncate();
        // echo "Truncate: medicalpoints \n";

        MedicalPoint::factory()->count(20)->create();
        $rows = MedicalPoint::all();
        echo " Insert: medicalpoints \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

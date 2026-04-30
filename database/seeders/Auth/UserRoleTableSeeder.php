<?php

namespace Database\Seeders\Auth;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

/**
 * Class UserRoleTableSeeder.
 */
class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        User::findOrFail(1)->syncRoles('super admin');
        User::findOrFail(2)->syncRoles('administrator');
        User::findOrFail(3)->syncRoles('manager');
        User::findOrFail(4)->syncRoles('executive');
        User::findOrFail(5)->syncRoles('user');

        Artisan::call('cache:clear');
        Artisan::call('permission:cache-reset');
    }
}
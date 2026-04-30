<?php

namespace Database\Seeders\Auth;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

/**
 * Class PermissionRoleTableSeeder.
 */
class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $this->CreateDefaultPermissions();

        /**
         * Create Roles and Assign Permissions to Roles.
         */
        $superadmin = Role::firstOrCreate(['id' => '1', 'name' => 'super admin']);
        $superadmin->syncPermissions(Permission::all());

        $admin = Role::firstOrCreate(['id' => '2', 'name' => 'administrator']);
        $admin->syncPermissions(['view_backend', 'edit_settings']);

        $manager = Role::firstOrCreate(['id' => '3', 'name' => 'manager']);
        $manager->syncPermissions('view_backend');

        $executive = Role::firstOrCreate(['id' => '4', 'name' => 'executive']);
        $executive->syncPermissions('view_backend');

        $user = Role::firstOrCreate(['id' => '5', 'name' => 'user']);
    }

    public function CreateDefaultPermissions()
    {
        // Create Permissions
        $permissions = Permission::defaultPermissions();

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web'
            ]);
        }

        Artisan::call('auth:permissions', [
            'name' => 'posts',
        ]);
        echo "\n _Posts_ Permissions Created.";

        Artisan::call('auth:permissions', [
            'name' => 'categories',
        ]);
        echo "\n _Categories_ Permissions Created.";

        Artisan::call('auth:permissions', [
            'name' => 'tags',
        ]);
        echo "\n _Tags_ Permissions Created.";

        Artisan::call('auth:permissions', [
            'name' => 'comments',
        ]);
        echo "\n _Comments_ Permissions Created.";

        echo "\n\n";
    }
}
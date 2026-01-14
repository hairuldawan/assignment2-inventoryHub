<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use function Symfony\Component\String\s;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Reset cache Spatie
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            'products-view',
            'products-create',
            'products-update',
            'products-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Admin
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $adminRole->givePermissionTo(Permission::all());

        // Staff
        $adminRole = Role::firstOrCreate(['name' => 'staff']);
        $adminRole->givePermissionTo(Permission::all());

        //Viewe
        $viewerRole = Role::firstOrCreate(['name' => 'viewer']);
        $viewerRole->givePermissionTo('products-view');

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password123'),
        ]);

        $admin->assignRole($adminRole);

        $staff = User::create([
            'name' => 'Viewer User',
            'email' => 'viewer@example.com',
            'password' => Hash::make('password123'),
        ]);

        $viewer = User::create([
            'name' => 'Viewer User',
            'email' => 'viewer@mail.com',
            'password' => Hash::make('password123'),
        ]);

        $viewer->assignRole($viewerRole);
    }
}

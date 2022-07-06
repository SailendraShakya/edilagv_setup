<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name' => User::ADMIN]);
        $accountingRole = Role::create(['name' => User::ACCOUNTING]);
        $surveyorRole = Role::create(['name' => User::SURVEYOR]);
        $foremanRole = Role::create(['name' => User::FOREMAN]);

        $permissions = [
            // User Permission
            ['name' => Permission::CREATE_USERS],
            ['name' => Permission::READ_USERS],
            ['name' => Permission::UPDATE_USERS],
            ['name' => Permission::DELETE_USERS],
            // Worker Permission
            ['name' => Permission::CREATE_WORKER],
            ['name' => Permission::READ_WORKER],
            ['name' => Permission::UPDATE_WORKER],
            ['name' => Permission::DELETE_WORKER],
            // Supplier Permission
            ['name' => Permission::CREATE_SUPPLIER],
            ['name' => Permission::READ_SUPPLIER],
            ['name' => Permission::UPDATE_SUPPLIER],
            ['name' => Permission::DELETE_SUPPLIER],
            // Means Permission
            ['name' => Permission::CREATE_MEANS],
            ['name' => Permission::READ_MEANS],
            ['name' => Permission::UDPATE_MEANS],
            ['name' => Permission::DELETE_MEANS],
            // Accounting Permission
            ['name' => Permission::CREATE_ACCOUNTING],
            ['name' => Permission::READ_ACCOUNTING],
            ['name' => Permission::UPDATE_ACCOUNTING],
            ['name' => Permission::DELETE_ACCOUNTING],
            // vat Permission
            ['name' => Permission::CREATE_VAT],
            ['name' => Permission::READ_VAT],
            ['name' => Permission::UPDATE_VAT],
            ['name' => Permission::DELETE_VAT],
            // Site Permission
            ['name' => Permission::CREATE_SITE],
            ['name' => Permission::READ_SITE],
            ['name' => Permission::UPDATE_SITE],
            ['name' => Permission::DELETE_SITE],
        ];

        $permissionsList = [];
        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}

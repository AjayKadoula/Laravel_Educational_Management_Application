<?php

use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new App\Role;
        $role_admin = new App\Role;
        $role_parents = new App\Role;
        $role_teachers = new App\Role;

        $role_user->name="User";
        $role_user->save();

        $role_admin->name="Admin";
        $role_admin->save();

        $role_parents->name="Parents";
        $role_parents->save();

        $role_teachers->name="Teachers";
        $role_teachers->save();
    }
}

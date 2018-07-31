<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             PageTableSeeder::class,
             SettingsTableSeeder::class,
             PermissionsTableSeeder::class,
             RoleTableSeeder::class,
             UserTableSeeder::class,
             ModelHasRolesTableSeeder::class,
             ModelHasPermissionsTableSeeder::class,
             RoleHasPermissionsTableSeeder::class,
         ]);
    }
}

<?php

use Illuminate\Database\Seeder;

/**
 * Seeder for database.
 */
class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
    }

}

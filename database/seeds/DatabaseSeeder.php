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
        // $this->call(xxxxTableSeeder::class);
        $this->call(adminuserTableSeeder::class);
        $this->call(adminshopTableSeeder::class);
        
    }
}

<?php

use Illuminate\Database\Seeder;

class adminshopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('adminshop')->insert(['name'=>'huaweishouji','user_id'=>1]);
    }
}

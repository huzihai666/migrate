<?php

use Illuminate\Database\Seeder;

class adminuserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1;$i<=100;$i++){
            DB::table('adminuser')->insert(['name'=>'huawei'.rand(1,99999)]);
        }
       
    }
}

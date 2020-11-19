<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $status = ['Available', 'Raising', 'Lowering', "Fully Raised"];
        
        $bridgeName = ['bridge 1', 'bridge 2', 'bridge 3', 'bridge 4', 'bridge 5', 'bridge 6', 'bridge 7'];

        $dateInt = mt_rand(0, 1645372894);

        $dateString = date("Y-m-d H:i:s",$dateInt);
        


        \DB::table('test')->insert([

            'bridge_name'=>\Arr::random($bridgeName),
            'bridge_id'=>\Str::random(10),
            'bridge_status'=>\Arr::random($status),
            'status_time'=>$dateString,

        ]);
        */


        factory(Test::class)->count(3)->create(); 


    }
}

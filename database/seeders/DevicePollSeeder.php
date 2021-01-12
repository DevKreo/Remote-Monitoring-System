<?php

namespace Database\Seeders;
use App\Models\Device_poll;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DevicePollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create('App\Article');
        //$Dictionaries_type_id=DB::table('dictionaries')->pluck('id');
        $error_table_fill=array("Грязь на камере", "6", "SNMP:нет связи", "HTTP:пустой ответ", "HTTP:нет связи");

        
        $devices = DB::table('devices')->pluck('id');


        foreach($devices as $value){
            Device_poll::create(['date'=>$faker->dateTime(), 
            'devices_id'=>$value, 
            'violation_quantity'=>rand(0,100),
            'transition'=>rand(0,100)
            ]);
        }
    }
}

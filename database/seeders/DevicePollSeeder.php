<?php

namespace Database\Seeders;

use App\Models\Device_poll;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\CarbonPeriod;

class DevicePollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create('App\Article');
        //$Dictionaries_type_id=DB::table('dictionaries')->pluck('id');
        $error_table_fill = array("Грязь на камере", "6", "SNMP:нет связи", "HTTP:пустой ответ", "HTTP:нет связи");

        $period = CarbonPeriod::create('2021-01-01', Carbon::now());
        $devices = DB::table('devices')->pluck('id');
        foreach($period as $date){
            foreach ($devices as $value) {
                //dd($i);
                Device_poll::create([
                    'date' => $date,
                    'devices_id' => $value,
                    'violation_quantity' => rand(0, 100),
                    'transition' => rand(0, 100)
                ]);
            }
        }
            
    }
}

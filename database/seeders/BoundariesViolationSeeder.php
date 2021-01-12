<?php

namespace Database\Seeders;
use App\Models\Device_boundariy_violatation_type;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BoundariesViolationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dev_bound_id = DB::table('device_boundaries')->pluck('id');
        $vio_id=DB::table('violation_types')->pluck('id');
        foreach($dev_bound_id as $value){
            foreach($vio_id as $value2){
                Device_boundariy_violatation_type::create([
                    'dev_bound_id'=>$value,
                    'vio_id'=>$value2
                ]);
            }
        }
    }
}

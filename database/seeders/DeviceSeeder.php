<?php

namespace Database\Seeders;
use App\Models\Device;
use Illuminate\Support\Facades\DB;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $lat = 53.2006600;
        $long = 45.0046400;

        $faker= Faker::create('App\Article');
        //$Dictionaries_type_id=DB::table('dictionaries')->pluck('id');
        $serial_number=array("MB0041 KB0698","MD0254 KD0327","MD0259-KD0332","MD0253 KD0326","DKS03250 DKL03251",
        "MT0046 KB0763","MT0044 KB0763","MT0039 KB0752");
    //     protected $table='devices';
    //     protected $fillable=['serial_number', 'device_groups_id','cord','cord_latitude','cord_longtitude','device_type_id',
    // 'device_boundaries_id','installation_date','date_of_deletion','device_developer_id','performance'];
        $device_group_id = DB::table('dictionaries')->where('dict_type_id', '10')->pluck('id');
        $device_type_id = DB::table('dictionaries')->where('dict_type_id', '9')->pluck('id');
        $developer_id = DB::table('dictionaries')->where('dict_type_id', '8')->pluck('id');
        $device_boundary_id = DB::table('device_boundaries')->pluck('id');
        foreach($serial_number as $value){
            $startDate=$faker->dateTime();
            Device::create(['serial_number'=>$value, 
            'device_groups_id'=>$faker->randomElement($device_group_id),
            'cord_latitude'=>$faker->latitude(
                $min = ($lat * 10000 - rand(0, 50)) / 10000,
                $max = ($lat * 10000 + rand(0, 50)) / 10000,),
            'cord_longtitude'=>$faker->longitude(
                $min = ($long * 10000 - rand(0, 50)) / 10000,
                $max = ($long * 10000 + rand(0, 50)) / 10000
            ),
            'device_type_id'=>$faker->randomElement($device_type_id),
            'device_boundaries_id'=>$faker->randomElement($device_boundary_id),
            'installation_date'=>$startDate,
            'date_of_deletion'=>$faker->dateTimeBetween($startDate, $endDate = 'now'),
            'device_developer_id'=>$faker->randomElement($developer_id),
            'performance'=>rand(0,100),
            ]);
        }
    }
}

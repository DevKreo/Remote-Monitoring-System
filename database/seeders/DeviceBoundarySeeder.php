<?php

namespace Database\Seeders;
use App\Models\Device_boundarie;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DeviceBoundarySeeder extends Seeder
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
        $boundary_name=array("г.Пенза ул.Аустрина, д. 164", 'г.Пенза, пересечение ул.Свердлова-ул.Набережная реки Мойки, дод.№2 по ул. Свердлова', 
        "г.Пенза, пересечение ул.Свердлова-ул.Богданова, напротив д.№50 по ул. Богданова", "г.Пенза, пересечение ул.Свердлова-ул.Богданова, напротив д.№30 по ул. Баумана", "г.Пенза, пересеччение ул.Свердлова-ул.Куйбышева", "г.Пенза, ул. Рахманинова, 10","г.Пенза, ул.Мира,45","г.Пенза,ул.Володаоского, 45");
        $speed_mode=array("30","60","90");
        $movement_states=array("moveble","mobile");
        $regions = DB::table('dictionaries')->where('dict_type_id', '2')->pluck('id');

        $boundary_groups = DB::table('dictionaries')->where('dict_type_id', '1')->pluck('id');
        foreach($boundary_name as $value){
            Device_boundarie::create(['device_bound_neme'=>$value, 
            'region_id'=>$faker->randomElement($regions),
            'speed_mode'=>$faker->randomElement($speed_mode), 
            'movement_states'=>$faker->randomElement($movement_states),
            'bound_group_id'=>$faker->randomElement($boundary_groups)]);
        }
    }
}

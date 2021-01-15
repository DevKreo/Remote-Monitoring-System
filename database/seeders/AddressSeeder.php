<?php

namespace Database\Seeders;
use App\Models\Address;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker= Faker::create('App\Article');
        $devices=DB::table('devices')->pluck('id');
        $regions = DB::table('dictionaries')->where('dict_type_id', '2')->pluck('id');
        $adresses=array("ул. Нейтральная,56","ул. Транспортная,13","ул. Большая Арбековская,127","ул. Строителей,5","ФАД М-5 'Урал' 527км+950м г.Нижний Ломов");
        foreach($adresses as $value){
            Address::create(['adress'=>$value, 
            'region_id'=>$faker->randomElement($regions),
            'count_of_device'=>1, 
            'device_id'=>$faker->randomElement($devices)]);
        }

    }
}

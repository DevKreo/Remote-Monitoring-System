<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Request;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create('App\Article');
        $r_status_id=DB::table('dictionaries')->where('dict_type_id', '5')->pluck('id');
        $operators_id=DB::table('users')->pluck('id');
        $devices_id=DB::table('devices')->pluck('id');
        $responsible_user_id=DB::table('users')->pluck('id');
        $opend = $faker->dateTime()->format("Y-m-d H:i:s");
        $closed=$faker->dateTime($opend, '+3 weeks')->format("Y-m-d H:i:s");
        $description=$faker->text();
    }
}

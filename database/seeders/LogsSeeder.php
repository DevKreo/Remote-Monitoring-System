<?php

namespace Database\Seeders;
use App\Models\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create('App\Article');
        $devices_id = DB::table('devices')->pluck('id');
        $users_id = DB::table('users')->pluck('id');
        $operation_type_id = DB::table('dictionaries')->where('dict_type_id', '6')->pluck('id');

        foreach($devices_id as $value){
            Log::create([
                'log_time'=>$faker->dateTimeBetween($startDate='-3 month', $endDate = 'now'),
                'devices_id'=>$value,
                'users_id'=>$faker->randomElement($users_id),
                'operation_type_id'=>$faker->randomElement($operation_type_id)
            ]);
        }
    }
}

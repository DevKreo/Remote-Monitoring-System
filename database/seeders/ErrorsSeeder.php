<?php

namespace Database\Seeders;
use App\Models\Error;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ErrorsSeeder extends Seeder
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

        
        $type_error = DB::table('dictionaries')->where('dict_type_id', '3')->pluck('id');


        foreach($error_table_fill as $value){
            Error::create(['message_error'=>$value, 
            'message_for_user'=>$value, 
            'error_type_id'=>$faker->randomElement($type_error)]);
        }

    }
}


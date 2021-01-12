<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use PharIo\Manifest\Email;

class UsersSeeder extends Seeder
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
        $name=array("Борис Гурвиц","Дмитрий Мочалин","РусланБ","АлексейК","Коваленко Владимир");
        $movement_states=array("moveble","mobile");
        $device_group_ip = DB::table('dictionaries')->where('dict_type_id', '10')->pluck('id');

        $roles_id = DB::table('roles')->pluck('id');
        foreach($name as $value){
            User::create(['name'=>$value, 
            'password'=>$faker->password(),
            'email'=>$faker->unique()->email, 
            'device_group_ip'=>$faker->randomElement($device_group_ip),
            'roles_id'=>$faker->randomElement($roles_id),
            'registration_date'=>$faker->dateTime()]);
        }
    }
}

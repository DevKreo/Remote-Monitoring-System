<?php

namespace Database\Seeders;
use App\Models\Roles_privelegies_dictionary;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RolesPrivelegiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_id = DB::table('roles')->pluck('id');
        $previlegies=DB::table('dictionaries')->where('dict_type_id', '7')->pluck('id');

        foreach($roles_id  as $value){
            foreach($previlegies as $value2){
                Roles_privelegies_dictionary::create([
                    'roles_id'=>$value,
                    'previleg_id'=>$value2
                ]);
            }
        }
    }
}

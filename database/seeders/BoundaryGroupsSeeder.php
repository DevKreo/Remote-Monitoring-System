<?php

namespace Database\Seeders;
use App\Models\Boundary_group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BoundaryGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('boundary_groups')->insert([
         //   'group_name' => Str::random(10),
        //]);

        $id = Boundary_group::create([
            "name"=>random_int(1,10)
        ]);

        \App\Models\Boundary_group::factory(10)->create();
    }
}

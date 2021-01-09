<?php

namespace Database\Seeders;
use App\Models\Dictionary;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


use Illuminate\Database\Seeder;

class DictionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Dictionaries_type_id=DB::table('dictionaries_types')->pluck('id');
        $dict_type_names =array('Группы рубежей','Регионы','Тип ошибки','Состояние запроса','Статус обращения','Тип операции','Привилегии','Производитель устройств','Тип устройства','Группы устройств','Регулярность','Параметры','Период запрашиваемого отчета');
        foreach($Dictionaries_type_id as $id){
            DB::table('dictionaries')->insert([
                'name'=>$faker->randomElement($dict_type_names),
                'dict_type_id' =>$faker->randomElement($Dictionaries_type_id)
            ]);
        }
    }
}

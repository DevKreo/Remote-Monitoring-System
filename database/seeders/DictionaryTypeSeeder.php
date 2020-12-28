<?php

namespace Database\Seeders;
use App\Models\Dictionaries_type;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DictionaryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //         //\App\Models\Dictionaries_type::factory(10)->create();
         
        // $id = Dictionaries_type::create([
        //     "dict_type_name"=>"Регионы"
        // ]);

        $dict_type_names =[['id'=>1,'dict_type_name'=>'Группы рубежей'],
        ['id'=>2,'dict_type_name'=>'Регионы'],
        ['id'=>3,'dict_type_name'=>'Тип ошибки'],
        ['id'=>4,'dict_type_name'=>'Состояние запроса'],
        ['id'=>5, 'dict_type_name'=> 'Статус обращения'],
        ['id'=>6,'dict_type_name'=> 'Тип операции'],
        ['id'=>7,'dict_type_name'=> 'Привилегии'],
        ['id'=>8, 'dict_type_name'=>'Производитель устройств'],
        ['id'=>9,'dict_type_name'=>'Тип устройства'],
        ['id'=>10,'dict_type_name'=>'Группы устройств'],
        ['id'=>11,'dict_type_name'=>'Регулярность'],
        ['id'=>12, 'dict_type_name'=>'Параметры'],
        ['id'=>13, 'dict_type_name'=>'Период запрашиваемого отчета'
        ]];
        DB::table('dictionaries_types')->insert($dict_type_names);

    }
}

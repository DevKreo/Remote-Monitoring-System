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

        $dict_type_names = ['dict_type_name'=>'Группы рубежей',
        'dict_type_name'=>'Регионы',
        'dict_type_name'=>'Тип ошибки',
        'dict_type_name'=>'Состояние запроса',
        'dict_type_name'=> 'Статус обращения',
        'dict_type_name'=> 'Тип операции',
        'dict_type_name'=> 'Привилегии',
        'dict_type_name'=>'Производитель устройств',
        'dict_type_name'=>'Тип устройства',
        'dict_type_name'=>'Группы устройств',
        'dict_type_name'=>'Регулярность',
        'dict_type_name'=>'Параметры',
        'dict_type_name'=>'Период запрашиваемого отчета'
        ];
        DB::table('dictionaries_types')->insert(array($dict_type_names));
    }
}

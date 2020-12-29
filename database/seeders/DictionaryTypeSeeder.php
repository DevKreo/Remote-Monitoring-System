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
       
        $dict_type_names =array('Группы рубежей',
        'Регионы',
        'Тип ошибки',
        'Состояние запроса',
        'Статус обращения',
        'Тип операции',
        'Привилегии',
        'Производитель устройств',
        'Тип устройства',
        'Группы устройств',
        'Регулярность',
        'Параметры',
        'Период запрашиваемого отчета');

        foreach($dict_type_names as $value){
            //DB::insert('insert into dictionaries_types(dict_type_name) values(?)', [$value]);
            Dictionaries_type::create(['dict_type_name' => $value]);
            //DB::table('dictionaries_types')->insert($value);
        }
        
    }
}

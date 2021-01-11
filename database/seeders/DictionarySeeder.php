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

        $boundaries_groups=array('Рубежи ГБУ','Орлан','Вокорд', 'Передвижки ГБУ','Большая Волга');
        $regions=array('Пензенская область');
        $errors_types=array('Прочее','Ошибки устройства');
        $appeal_states=array();
        $request_states=array('В работе','Закрыто');
        $operation_types=array('Добавление','Изменение','Удаление');
        $privileges=array('Просмотр пользователей','Добавление пользователей','Изменение пользователей','Удаление пользователей','Востановление пользователей','Просмотр ролей',
        'Просмотр устройств','Информация с устройств','Просмотр сводки','Рабочий стол','Просмотр группы устройств','Выгрузка файлов');
        $device_developers=array('Корда-групп','Vitronik','ISS','СИМИКОН','Ольвия');
        $device_types=array('Декарт','Орлан','Vocord','Робустел','Трафик-сканер','КОРДОН','Крис-П','Паркон');
        $device_groups=array('Орлан','Вокорд','Большая Волга','Комплексы ГБУ','Бывший УКС','Передвежные комплексы','Ростелеком');
        $regylarity=array('Раз в день','Раз в неделю');
        $parametrs=array('Нарушения','Проезды','Работоспособность','Отношение нарушения к проездам');
        $periods_of_requesting_report=array('За месяц', 'За неделю', 'За квартал');
        $Dictionaries_type_id=DB::table('dictionaries_types')->pluck('id');
        $dict_type_names =array('Группы рубежей',
        'Регионы','Тип ошибки',
        'Состояние запроса','Статус обращения',
        'Тип операции','Привилегии','Производитель устройств',
        'Тип устройства','Группы устройств','Регулярность',
        'Параметры','Период запрашиваемого отчета');
        foreach($Dictionaries_type_id as $id){
            DB::table('dictionaries')->insert([
                'name'=>$faker->randomElement($dict_type_names),
                'dict_type_id' =>$faker->randomElement($Dictionaries_type_id)
            ]);
        }
    }
}

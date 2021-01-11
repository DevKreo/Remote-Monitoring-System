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

        $boundaries_groups = array('Рубежи ГБУ', 'Орлан', 'Вокорд', 'Передвижки ГБУ', 'Большая Волга');
        $regions = array('Пензенская область');
        $errors_types = array('Прочее', 'Ошибки устройства');
        $request_states = array('В работе', 'Закрыто');
        $operation_types = array('Добавление', 'Изменение', 'Удаление');
        $privileges = array(
            'Просмотр пользователей', 'Добавление пользователей', 'Изменение пользователей', 'Удаление пользователей', 'Востановление пользователей', 'Просмотр ролей',
            'Просмотр устройств', 'Информация с устройств', 'Просмотр сводки', 'Рабочий стол', 'Просмотр группы устройств', 'Выгрузка файлов'
        );
        $device_developers = array('Корда-групп', 'Vitronik', 'ISS', 'СИМИКОН', 'Ольвия');
        $device_types = array('Декарт', 'Орлан', 'Vocord', 'Робустел', 'Трафик-сканер', 'КОРДОН', 'Крис-П', 'Паркон');
        $device_groups = array('Орлан', 'Вокорд', 'Большая Волга', 'Комплексы ГБУ', 'Бывший УКС', 'Передвежные комплексы', 'Ростелеком');
        $regylarity = array('Раз в день', 'Раз в неделю');
        $parametrs = array('Нарушения', 'Проезды', 'Работоспособность', 'Отношение нарушения к проездам');
        $periods_of_requesting_report = array('За месяц', 'За неделю', 'За квартал');
        $Dictionaries_type_id = DB::table('dictionaries_types')->pluck('id');
        $dict_type_names = array(
            'Группы рубежей',
            'Регионы', 'Тип ошибки',
            'Состояние запроса', 'Статус обращения',
            'Тип операции', 'Привилегии', 'Производитель устройств',
            'Тип устройства', 'Группы устройств', 'Регулярность',
            'Параметры', 'Период запрашиваемого отчета'
        );
        foreach ($Dictionaries_type_id as $id) {
            // DB::table('dictionaries')->insert([
            //     'name'=>$faker->randomElement($dict_type_names),
            //     'dict_type_id' =>$faker->randomElement($Dictionaries_type_id)
            // ]);
            switch ($id) {
                case 28:
                    foreach ($boundaries_groups as $value) {
                        Dictionary::create(['name' => $value, 'dict_type_id' => $id]);
                    }
                    break;
                case 29:
                    foreach ($regions as $value) {
                        Dictionary::create(['name' => $value, 'dict_type_id' => $id]);
                    }
                    break;
                case 30:
                    foreach ($errors_types as $value) {
                        Dictionary::create(['name' => $value, 'dict_type_id' => $id]);
                    }
                    break;
                case 32:
                    foreach ($request_states as $value) {
                        Dictionary::create(['name' => $value, 'dict_type_id' => $id]);
                    }
                    break;
                case 33:
                    foreach ($operation_types as $value) {
                        Dictionary::create(['name' => $value, 'dict_type_id' => $id]);
                    }
                    break;
                case 34:
                    foreach ($privileges as $value) {
                        Dictionary::create(['name' => $value, 'dict_type_id' => $id]);
                    }
                    break;
                case 35:
                    foreach ($device_developers as $value) {
                        Dictionary::create(['name' => $value, 'dict_type_id' => $id]);
                    }
                    break;
                case 36:
                    foreach ($device_types as $value) {
                        Dictionary::create(['name' => $value, 'dict_type_id' => $id]);
                    }
                    break;
                case 37:
                    foreach ($device_groups as $value) {
                        Dictionary::create(['name' => $value, 'dict_type_id' => $id]);
                    }
                    break;
                case 38:
                    foreach ($regylarity as $value) {
                        Dictionary::create(['name' => $value, 'dict_type_id' => $id]);
                    }
                    break;
                case 39:
                    foreach ($parametrs as $value) {
                        Dictionary::create(['name' => $value, 'dict_type_id' => $id]);
                    }
                    break;
                case 40:
                    foreach ($periods_of_requesting_report as $value) {
                        Dictionary::create(['name' => $value, 'dict_type_id' => $id]);
                    }
                    break;
            }
        }
    }
}

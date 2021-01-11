<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_full_name = array("Мониторинг-Исполнитель", 
        "Исполнитель",
        "Экспорт для ГИС-портала", 
        "Тестирование",
        "Выгрузка передвижных", 
        "Заказчик по пилоту",
        "Заказчик",
        "Администратор");
        $roles_short_name = array("Мониторинг-Исполнитель", 
        "Исполнитель", 
        "Экспорт для ГИС-портала", 
        "Test", 
        "ВД",
        "ГБУ",
        "1",
        "admin");
        for($i=0; $i<count($roles_full_name); $i++){
            Role::create(['role_name'=>$roles_full_name[$i],'role_short_name'=>$roles_short_name[$i]]);
        }
    }
}

<?php

namespace Database\Seeders;
use App\Models\Violation_type;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ViolationTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $via_table_fill=array("Непредоставление преймущества движения пешиходу", 
            "Стоп-линия", 
            "Проезд на запрещенный сигнал светофора", 
            "Превышение скорости", 
            "Поворот не со своей полосы", 
            "Выезд на встречную полосу движения",
            "Стоянка и парковка в неположенном месте"
        );
        foreach($via_table_fill as $id){
            Violation_type::create(['violation_neme' => $id, 
            'description' => $id]);
        }
    }
}

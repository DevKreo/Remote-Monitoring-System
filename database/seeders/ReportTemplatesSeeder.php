<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Report_template;
use Illuminate\Database\Seeder;

class ReportTemplatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $report_template_name=array('32',
            'Отчет проезды по рубежу Карпинского 142, Гагарина 21, Октябрь 38',
            'ДЛЯ ПРЕЗЕНТАЦИИ (рубеж-нарушения)',
            'ДЛЯ ПРЕЗЕНТАЦИИ (устройства проезды)',
            'Все комплексы, нарушения, текущ. месяц',
            'Пример',
            'ФАД М-5 "УРАЛ"',
            'Итоговый Пенз. ообласть'
        );
        $device_id = DB::table('devices')->pluck('id');
        $parametr_id= DB::table('dictionaries')->where('dict_type_id', '12')->pluck('id');


    }
}

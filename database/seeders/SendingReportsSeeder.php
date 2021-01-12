<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Sending_report;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SendingReportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create('App\Article');
        $report_periods_id = DB::table('dictionaries')->where('dict_type_id', '13')->pluck('id');
        $reports_template_id=DB::table('report_templates')->pluck('id');
        $reg_id=DB::table('dictionaries')->where('dict_type_id','11')->pluck('id');

        foreach($reports_template_id as $value){
            Sending_report::create([
                'reports_template_id'=>$value,
                'reg_id'=>$faker->randomElement($reg_id),
                'report_periods_id'=>$faker->randomElement($report_periods_id),
                'destination'=>$faker->unique()->email
            ]);
        }
    }
}

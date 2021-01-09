<?php

namespace Database\Seeders;
use App\Models\Error_message;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ErrorMessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$Dictionaries_type_id=DB::table('dictionaries')->pluck('id');
        $error_table_fill=array("Грязь на камере", "6", "SNMP:нет связи", "HTTP:пустой ответ", "HTTP:нет связи");
        foreach($error_table_fill as $value){
            Error_message::create(['message_error'=>$value, 'message_for_user'=>$value]);
        }
    }
}

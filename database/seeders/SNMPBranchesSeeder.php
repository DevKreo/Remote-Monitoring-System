<?php

namespace Database\Seeders;
use App\Models\S_n_m_p_branche;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SNMPBranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $name_snmp_branches_name = array("UpTime Роутера", "Синхронизация времени", "Напряжение, В");
        $oid_imitation = array("1.3.6.1.2.1.1.3.0","1.3.6.1.4.1.8072.99.1.1.1.2.24.84.105.109.101.32.115.121.110.99.104.114.111.110.105.122.101.100.32.115.116.97.116.117.115","1.3.6.1.4.1.8072.99.1.1.1.2.18.72.101.97.108.116.104.58.32.80.67.32.118.111.108.116.97.103.101");

        //foreach($name_snmp_branches_name as $value){
          //  S_n_m_p_branche::create(['branch_name' => $value, 'OID'=>]);
        //}
        for ($i=0; $i<count($name_snmp_branches_name); $i++){
            S_n_m_p_branche::create(['branch_name' => $name_snmp_branches_name[$i], 'OID'=>$oid_imitation[$i]]);
        }
    }

    
}

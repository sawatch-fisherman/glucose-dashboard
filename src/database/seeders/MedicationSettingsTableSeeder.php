<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MedicationSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('medication_settings')->delete();
        
        \DB::table('medication_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'name' => 'ノボラピッド',
                'dosage_unit' => 0.1,
                'medication_abbr' => 'N',
                'created_at' => '2024-08-14 05:38:22',
                'updated_at' => '2024-08-14 05:38:23',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'name' => 'トレシーバ',
                'dosage_unit' => 0.5,
                'medication_abbr' => 'T',
                'created_at' => '2024-08-14 05:43:03',
                'updated_at' => '2024-08-14 05:43:04',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
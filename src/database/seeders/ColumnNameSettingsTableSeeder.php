<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ColumnNameSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('column_name_settings')->delete();
        
        \DB::table('column_name_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'main_item1' => '朝',
                'sub_item1_1' => '前',
                'sub_item1_2' => '後',
                'main_item2' => '昼',
                'sub_item2_1' => '前',
                'sub_item2_2' => '後',
                'main_item3' => '夕',
                'sub_item3_1' => '前',
                'sub_item3_2' => '後',
                'remarks' => 'メモ',
                'created_at' => '2024-08-13 06:08:34',
                'updated_at' => '2024-08-13 06:08:35',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GlucoseRecordsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('glucose_records')->delete();
        
        \DB::table('glucose_records')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'col' => 1,
                'date' => '2024-08-01',
                'time' => '06:10:01',
                'cgm_value' => '210',
                'smbg_value' => '171',
                'created_at' => '2024-08-13 06:10:15',
                'updated_at' => '2024-08-13 06:10:16',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'col' => 2,
                'date' => '2024-08-01',
                'time' => '08:20:03',
                'cgm_value' => '187',
                'smbg_value' => '128',
                'created_at' => '2024-08-14 06:11:23',
                'updated_at' => '2024-08-14 06:11:23',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'col' => 3,
                'date' => '2024-08-01',
                'time' => '12:25:50',
                'cgm_value' => '低値',
                'smbg_value' => '113',
                'created_at' => '2024-08-14 06:11:23',
                'updated_at' => '2024-08-14 06:11:23',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'col' => 4,
                'date' => '2024-08-01',
                'time' => '14:31:40',
                'cgm_value' => '120',
                'smbg_value' => '127',
                'created_at' => '2024-08-14 06:11:23',
                'updated_at' => '2024-08-14 06:11:23',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'col' => 5,
                'date' => '2024-08-01',
                'time' => '18:41:50',
                'cgm_value' => '80',
                'smbg_value' => '90',
                'created_at' => '2024-08-14 06:11:23',
                'updated_at' => '2024-08-14 06:11:23',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'col' => 6,
                'date' => '2024-08-01',
                'time' => '21:55:50',
                'cgm_value' => '高値',
                'smbg_value' => '321',
                'created_at' => '2024-08-14 06:11:23',
                'updated_at' => '2024-08-14 06:11:23',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'col' => 1,
                'date' => '2024-08-02',
                'time' => '06:10:01',
                'cgm_value' => '201',
                'smbg_value' => '237',
                'created_at' => '2024-08-13 06:10:15',
                'updated_at' => '2024-08-13 06:10:16',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'col' => 2,
                'date' => '2024-08-02',
                'time' => '08:20:03',
                'cgm_value' => '108',
                'smbg_value' => '92',
                'created_at' => '2024-08-14 06:11:23',
                'updated_at' => '2024-08-14 06:11:23',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'col' => 3,
                'date' => '2024-08-02',
                'time' => '12:25:50',
                'cgm_value' => '',
                'smbg_value' => '113',
                'created_at' => '2024-08-14 06:11:23',
                'updated_at' => '2024-08-14 06:11:23',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'col' => 4,
                'date' => '2024-08-02',
                'time' => '14:31:40',
                'cgm_value' => '120',
                'smbg_value' => '',
                'created_at' => '2024-08-14 06:11:23',
                'updated_at' => '2024-08-14 06:11:23',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'col' => 5,
                'date' => '2024-08-02',
                'time' => '18:41:50',
                'cgm_value' => '109',
                'smbg_value' => '77',
                'created_at' => '2024-08-14 06:11:23',
                'updated_at' => '2024-08-14 06:11:23',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'col' => 6,
                'date' => '2024-08-02',
                'time' => '21:55:50',
                'cgm_value' => '130',
                'smbg_value' => '117',
                'created_at' => '2024-08-14 06:11:23',
                'updated_at' => '2024-08-14 06:11:23',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
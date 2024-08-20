<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RemarkRecordsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('remark_records')->delete();
        
        \DB::table('remark_records')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'date' => '2024-08-01',
                'remark_value' => '内科',
                'created_at' => '2024-08-13 06:10:15',
                'updated_at' => '2024-08-13 06:10:16',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'date' => '2024-08-02',
                'remark_value' => '歯医者',
                'created_at' => '2024-08-13 06:10:15',
                'updated_at' => '2024-08-13 06:10:16',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
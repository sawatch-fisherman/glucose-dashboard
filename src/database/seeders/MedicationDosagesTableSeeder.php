<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MedicationDosagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('medication_dosages')->delete();
        
        \DB::table('medication_dosages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'glucose_records_id' => 1,
                'medication_id' => 1,
                'dosage_amount' => 4.0,
                'created_at' => '2024-08-14 06:09:14',
                'updated_at' => '2024-08-14 06:09:15',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'glucose_records_id' => 2,
                'medication_id' => 1,
                'dosage_amount' => 6.0,
                'created_at' => '2024-08-14 06:09:14',
                'updated_at' => '2024-08-14 06:09:15',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'glucose_records_id' => 3,
                'medication_id' => 1,
                'dosage_amount' => 6.0,
                'created_at' => '2024-08-16 05:36:10',
                'updated_at' => '2024-08-16 05:36:11',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'glucose_records_id' => 4,
                'medication_id' => 1,
                'dosage_amount' => 2.0,
                'created_at' => '2024-08-16 05:56:57',
                'updated_at' => '2024-08-16 05:56:58',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'glucose_records_id' => 5,
                'medication_id' => 1,
                'dosage_amount' => 7.0,
                'created_at' => '2024-08-16 05:57:56',
                'updated_at' => '2024-08-16 05:57:57',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'glucose_records_id' => 6,
                'medication_id' => 1,
                'dosage_amount' => 8.0,
                'created_at' => '2024-08-16 05:58:53',
                'updated_at' => '2024-08-16 05:58:53',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'glucose_records_id' => 6,
                'medication_id' => 2,
                'dosage_amount' => 3.5,
                'created_at' => '2024-08-16 05:59:12',
                'updated_at' => '2024-08-16 05:59:13',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'glucose_records_id' => 7,
                'medication_id' => 1,
                'dosage_amount' => 4.0,
                'created_at' => '2024-08-14 06:09:14',
                'updated_at' => '2024-08-14 06:09:15',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'glucose_records_id' => 8,
                'medication_id' => 1,
                'dosage_amount' => 5.0,
                'created_at' => '2024-08-14 06:09:14',
                'updated_at' => '2024-08-14 06:09:15',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'glucose_records_id' => 9,
                'medication_id' => 1,
                'dosage_amount' => 7.0,
                'created_at' => '2024-08-16 05:36:10',
                'updated_at' => '2024-08-16 05:36:11',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'glucose_records_id' => 10,
                'medication_id' => 1,
                'dosage_amount' => 2.5,
                'created_at' => '2024-08-16 05:56:57',
                'updated_at' => '2024-08-16 05:56:58',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'glucose_records_id' => 10,
                'medication_id' => 2,
                'dosage_amount' => 4.0,
                'created_at' => '2024-08-16 05:57:56',
                'updated_at' => '2024-08-16 05:57:57',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'glucose_records_id' => 11,
                'medication_id' => 1,
                'dosage_amount' => 12.0,
                'created_at' => '2024-08-16 05:58:53',
                'updated_at' => '2024-08-16 05:58:53',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'glucose_records_id' => 12,
                'medication_id' => 1,
                'dosage_amount' => 5.0,
                'created_at' => '2024-08-16 05:59:12',
                'updated_at' => '2024-08-16 05:59:13',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'uuid' => '123e4567-e89b-12d3-a456-426614174000',
                'name' => '山田太郎',
                'email' => 'sample@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$MB.0aZw5wHy4K7pqAYDPmu/X2KkZZAx7EEuEcYHjAW8GQWVXATs34',
                'reset_password' => NULL,
                'reset_password_expiry' => NULL,
                'remember_token' => 'ZU9q5FaicbHMTVS437ULuhpFAEYKNFRR8t1ac8IJf808ucN2KdKecu1uJSHZ',
                'created_at' => '2024-08-05 05:47:06',
                'updated_at' => '2024-08-05 05:47:06',
                'deleted_at' => NULL,
            ),
        ));


    }
}

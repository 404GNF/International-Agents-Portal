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
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nDVMopfMns38OPOwueniXOK4gxNX4F4hHWZEQVc8SGib.Ibv4QtfO',
                'remember_token' => '0eQ74R0aQZbGG5zKWLECsUzzxHKtjaJ2GVawRkCTh0NW1SgdJRmTZwooNRXl',
                'settings' => NULL,
                'created_at' => '2021-05-13 17:26:50',
                'updated_at' => '2021-05-13 17:26:50',
            ),
        ));
        
        
    }
}
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
                'avatar' => 'users/default.png',
                'created_at' => '2021-05-13 17:26:50',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'admin',
                'password' => '$2y$10$nDVMopfMns38OPOwueniXOK4gxNX4F4hHWZEQVc8SGib.Ibv4QtfO',
                'remember_token' => '0eQ74R0aQZbGG5zKWLECsUzzxHKtjaJ2GVawRkCTh0NW1SgdJRmTZwooNRXl',
                'role_id' => 1,
                'settings' => NULL,
                'updated_at' => '2021-05-13 17:26:50',
            ),
        ));
        
        
    }
}
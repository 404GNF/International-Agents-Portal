<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'updated_at' => '2021-05-13 17:26:15',
            ),
            1 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'updated_at' => '2021-05-13 17:26:15',
            ),
            2 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'updated_at' => '2021-05-13 17:26:15',
            ),
            3 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'updated_at' => '2021-05-13 17:26:15',
            ),
            4 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'updated_at' => '2021-05-13 17:26:15',
            ),
            5 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            6 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            7 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            8 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            9 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            10 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            11 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            12 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            13 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            14 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            15 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            16 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            17 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            18 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            19 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            20 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            21 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            22 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            23 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            24 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            25 => 
            array (
                'created_at' => '2021-05-13 17:26:15',
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'updated_at' => '2021-05-13 17:26:15',
            ),
            26 => 
            array (
                'created_at' => '2021-05-14 15:48:35',
                'id' => 37,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'updated_at' => '2021-05-14 15:48:35',
            ),
            27 => 
            array (
                'created_at' => '2021-05-14 15:48:35',
                'id' => 38,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'updated_at' => '2021-05-14 15:48:35',
            ),
            28 => 
            array (
                'created_at' => '2021-05-14 15:48:35',
                'id' => 39,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'updated_at' => '2021-05-14 15:48:35',
            ),
            29 => 
            array (
                'created_at' => '2021-05-14 15:48:35',
                'id' => 40,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'updated_at' => '2021-05-14 15:48:35',
            ),
            30 => 
            array (
                'created_at' => '2021-05-14 15:48:35',
                'id' => 41,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'updated_at' => '2021-05-14 15:48:35',
            ),
            31 => 
            array (
                'created_at' => '2021-05-14 15:57:04',
                'id' => 42,
                'key' => 'browse_videos',
                'table_name' => 'videos',
                'updated_at' => '2021-05-14 15:57:04',
            ),
            32 => 
            array (
                'created_at' => '2021-05-14 15:57:04',
                'id' => 43,
                'key' => 'read_videos',
                'table_name' => 'videos',
                'updated_at' => '2021-05-14 15:57:04',
            ),
            33 => 
            array (
                'created_at' => '2021-05-14 15:57:04',
                'id' => 44,
                'key' => 'edit_videos',
                'table_name' => 'videos',
                'updated_at' => '2021-05-14 15:57:04',
            ),
            34 => 
            array (
                'created_at' => '2021-05-14 15:57:04',
                'id' => 45,
                'key' => 'add_videos',
                'table_name' => 'videos',
                'updated_at' => '2021-05-14 15:57:04',
            ),
            35 => 
            array (
                'created_at' => '2021-05-14 15:57:04',
                'id' => 46,
                'key' => 'delete_videos',
                'table_name' => 'videos',
                'updated_at' => '2021-05-14 15:57:04',
            ),
            36 => 
            array (
                'created_at' => '2021-05-14 16:09:55',
                'id' => 47,
                'key' => 'browse_resources',
                'table_name' => 'resources',
                'updated_at' => '2021-05-14 16:09:55',
            ),
            37 => 
            array (
                'created_at' => '2021-05-14 16:09:55',
                'id' => 48,
                'key' => 'read_resources',
                'table_name' => 'resources',
                'updated_at' => '2021-05-14 16:09:55',
            ),
            38 => 
            array (
                'created_at' => '2021-05-14 16:09:55',
                'id' => 49,
                'key' => 'edit_resources',
                'table_name' => 'resources',
                'updated_at' => '2021-05-14 16:09:55',
            ),
            39 => 
            array (
                'created_at' => '2021-05-14 16:09:55',
                'id' => 50,
                'key' => 'add_resources',
                'table_name' => 'resources',
                'updated_at' => '2021-05-14 16:09:55',
            ),
            40 => 
            array (
                'created_at' => '2021-05-14 16:09:55',
                'id' => 51,
                'key' => 'delete_resources',
                'table_name' => 'resources',
                'updated_at' => '2021-05-14 16:09:55',
            ),
        ));
        
        
    }
}
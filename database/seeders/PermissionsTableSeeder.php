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
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            26 => 
            array (
                'id' => 37,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2021-05-14 15:48:35',
                'updated_at' => '2021-05-14 15:48:35',
            ),
            27 => 
            array (
                'id' => 38,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2021-05-14 15:48:35',
                'updated_at' => '2021-05-14 15:48:35',
            ),
            28 => 
            array (
                'id' => 39,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2021-05-14 15:48:35',
                'updated_at' => '2021-05-14 15:48:35',
            ),
            29 => 
            array (
                'id' => 40,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2021-05-14 15:48:35',
                'updated_at' => '2021-05-14 15:48:35',
            ),
            30 => 
            array (
                'id' => 41,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2021-05-14 15:48:35',
                'updated_at' => '2021-05-14 15:48:35',
            ),
            31 => 
            array (
                'id' => 42,
                'key' => 'browse_videos',
                'table_name' => 'videos',
                'created_at' => '2021-05-14 15:57:04',
                'updated_at' => '2021-05-14 15:57:04',
            ),
            32 => 
            array (
                'id' => 43,
                'key' => 'read_videos',
                'table_name' => 'videos',
                'created_at' => '2021-05-14 15:57:04',
                'updated_at' => '2021-05-14 15:57:04',
            ),
            33 => 
            array (
                'id' => 44,
                'key' => 'edit_videos',
                'table_name' => 'videos',
                'created_at' => '2021-05-14 15:57:04',
                'updated_at' => '2021-05-14 15:57:04',
            ),
            34 => 
            array (
                'id' => 45,
                'key' => 'add_videos',
                'table_name' => 'videos',
                'created_at' => '2021-05-14 15:57:04',
                'updated_at' => '2021-05-14 15:57:04',
            ),
            35 => 
            array (
                'id' => 46,
                'key' => 'delete_videos',
                'table_name' => 'videos',
                'created_at' => '2021-05-14 15:57:04',
                'updated_at' => '2021-05-14 15:57:04',
            ),
            36 => 
            array (
                'id' => 47,
                'key' => 'browse_resources',
                'table_name' => 'resources',
                'created_at' => '2021-05-14 16:09:55',
                'updated_at' => '2021-05-14 16:09:55',
            ),
            37 => 
            array (
                'id' => 48,
                'key' => 'read_resources',
                'table_name' => 'resources',
                'created_at' => '2021-05-14 16:09:55',
                'updated_at' => '2021-05-14 16:09:55',
            ),
            38 => 
            array (
                'id' => 49,
                'key' => 'edit_resources',
                'table_name' => 'resources',
                'created_at' => '2021-05-14 16:09:55',
                'updated_at' => '2021-05-14 16:09:55',
            ),
            39 => 
            array (
                'id' => 50,
                'key' => 'add_resources',
                'table_name' => 'resources',
                'created_at' => '2021-05-14 16:09:55',
                'updated_at' => '2021-05-14 16:09:55',
            ),
            40 => 
            array (
                'id' => 51,
                'key' => 'delete_resources',
                'table_name' => 'resources',
                'created_at' => '2021-05-14 16:09:55',
                'updated_at' => '2021-05-14 16:09:55',
            ),
            41 => 
            array (
                'id' => 52,
                'key' => 'browse_personal_stories',
                'table_name' => 'personal_stories',
                'created_at' => '2021-05-19 17:06:14',
                'updated_at' => '2021-05-19 17:06:14',
            ),
            42 => 
            array (
                'id' => 53,
                'key' => 'read_personal_stories',
                'table_name' => 'personal_stories',
                'created_at' => '2021-05-19 17:06:14',
                'updated_at' => '2021-05-19 17:06:14',
            ),
            43 => 
            array (
                'id' => 54,
                'key' => 'edit_personal_stories',
                'table_name' => 'personal_stories',
                'created_at' => '2021-05-19 17:06:14',
                'updated_at' => '2021-05-19 17:06:14',
            ),
            44 => 
            array (
                'id' => 55,
                'key' => 'add_personal_stories',
                'table_name' => 'personal_stories',
                'created_at' => '2021-05-19 17:06:14',
                'updated_at' => '2021-05-19 17:06:14',
            ),
            45 => 
            array (
                'id' => 56,
                'key' => 'delete_personal_stories',
                'table_name' => 'personal_stories',
                'created_at' => '2021-05-19 17:06:14',
                'updated_at' => '2021-05-19 17:06:14',
            ),
        ));
        
        
    }
}
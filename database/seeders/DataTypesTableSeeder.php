<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'created_at' => '2021-05-13 17:26:15',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Users',
                'display_name_singular' => 'User',
                'generate_permissions' => 1,
                'icon' => 'voyager-person',
                'id' => 1,
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'name' => 'users',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'server_side' => 0,
                'slug' => 'users',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            1 => 
            array (
                'controller' => '',
                'created_at' => '2021-05-13 17:26:15',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Menus',
                'display_name_singular' => 'Menu',
                'generate_permissions' => 1,
                'icon' => 'voyager-list',
                'id' => 2,
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'name' => 'menus',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'menus',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            2 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'created_at' => '2021-05-13 17:26:15',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Roles',
                'display_name_singular' => 'Role',
                'generate_permissions' => 1,
                'icon' => 'voyager-lock',
                'id' => 3,
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'name' => 'roles',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'roles',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            3 => 
            array (
                'controller' => NULL,
                'created_at' => '2021-05-14 15:48:35',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'display_name_plural' => 'Categories',
                'display_name_singular' => 'Category',
                'generate_permissions' => 1,
                'icon' => 'voyager-categories',
                'id' => 6,
                'model_name' => 'App\\Category',
                'name' => 'categories',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'categories',
                'updated_at' => '2021-05-14 15:48:35',
            ),
            4 => 
            array (
                'controller' => NULL,
                'created_at' => '2021-05-14 15:57:04',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Videos',
                'display_name_singular' => 'Video',
                'generate_permissions' => 1,
                'icon' => 'voyager-video',
                'id' => 7,
                'model_name' => 'App\\Video',
                'name' => 'videos',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'videos',
                'updated_at' => '2021-05-14 15:58:33',
            ),
            5 => 
            array (
                'controller' => NULL,
                'created_at' => '2021-05-14 16:09:55',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Resources',
                'display_name_singular' => 'Resource',
                'generate_permissions' => 1,
                'icon' => 'voyager-photos',
                'id' => 8,
                'model_name' => 'App\\Resource',
                'name' => 'resources',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'resources',
                'updated_at' => '2021-05-14 16:12:57',
            ),
        ));
        
        
    }
}
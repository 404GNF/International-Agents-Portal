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
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'App\\Category',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2021-05-14 15:48:35',
                'updated_at' => '2021-05-14 15:48:35',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'videos',
                'slug' => 'videos',
                'display_name_singular' => 'Video',
                'display_name_plural' => 'Videos',
                'icon' => 'voyager-video',
                'model_name' => 'App\\Video',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-05-14 15:57:04',
                'updated_at' => '2021-05-14 15:58:33',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'resources',
                'slug' => 'resources',
                'display_name_singular' => 'Resource',
                'display_name_plural' => 'Resources',
                'icon' => 'voyager-photos',
                'model_name' => 'App\\Resource',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-05-14 16:09:55',
                'updated_at' => '2021-06-18 12:29:55',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'personal_stories',
                'slug' => 'personal-stories',
                'display_name_singular' => 'Personal Story',
                'display_name_plural' => 'Personal Stories',
                'icon' => NULL,
                'model_name' => 'App\\Models\\PersonalStory',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-05-19 17:06:14',
                'updated_at' => '2021-05-20 12:36:36',
            ),
        ));
        
        
    }
}
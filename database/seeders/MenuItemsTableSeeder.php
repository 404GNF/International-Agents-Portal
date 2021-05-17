<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'color' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'icon_class' => 'voyager-boat',
                'id' => 1,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.dashboard',
                'target' => '_self',
                'title' => 'Dashboard',
                'updated_at' => '2021-05-13 17:26:15',
                'url' => '',
            ),
            1 => 
            array (
                'color' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'icon_class' => 'voyager-images',
                'id' => 2,
                'menu_id' => 1,
                'order' => 4,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.media.index',
                'target' => '_self',
                'title' => 'Media',
                'updated_at' => '2021-05-14 15:50:18',
                'url' => '',
            ),
            2 => 
            array (
                'color' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'icon_class' => 'voyager-person',
                'id' => 3,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.users.index',
                'target' => '_self',
                'title' => 'Users',
                'updated_at' => '2021-05-13 17:26:15',
                'url' => '',
            ),
            3 => 
            array (
                'color' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'icon_class' => 'voyager-lock',
                'id' => 4,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.roles.index',
                'target' => '_self',
                'title' => 'Roles',
                'updated_at' => '2021-05-13 17:26:15',
                'url' => '',
            ),
            4 => 
            array (
                'color' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'icon_class' => 'voyager-tools',
                'id' => 5,
                'menu_id' => 1,
                'order' => 6,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => NULL,
                'target' => '_self',
                'title' => 'Tools',
                'updated_at' => '2021-05-14 16:11:35',
                'url' => '',
            ),
            5 => 
            array (
                'color' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'icon_class' => 'voyager-list',
                'id' => 6,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.menus.index',
                'target' => '_self',
                'title' => 'Menu Builder',
                'updated_at' => '2021-05-14 15:50:18',
                'url' => '',
            ),
            6 => 
            array (
                'color' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'icon_class' => 'voyager-data',
                'id' => 7,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.database.index',
                'target' => '_self',
                'title' => 'Database',
                'updated_at' => '2021-05-14 15:50:18',
                'url' => '',
            ),
            7 => 
            array (
                'color' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'icon_class' => 'voyager-compass',
                'id' => 8,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.compass.index',
                'target' => '_self',
                'title' => 'Compass',
                'updated_at' => '2021-05-14 15:50:18',
                'url' => '',
            ),
            8 => 
            array (
                'color' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'icon_class' => 'voyager-bread',
                'id' => 9,
                'menu_id' => 1,
                'order' => 4,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.bread.index',
                'target' => '_self',
                'title' => 'BREAD',
                'updated_at' => '2021-05-14 15:50:18',
                'url' => '',
            ),
            9 => 
            array (
                'color' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'icon_class' => 'voyager-settings',
                'id' => 10,
                'menu_id' => 1,
                'order' => 7,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.settings.index',
                'target' => '_self',
                'title' => 'Settings',
                'updated_at' => '2021-05-14 16:11:35',
                'url' => '',
            ),
            10 => 
            array (
                'color' => NULL,
                'created_at' => '2021-05-13 17:26:15',
                'icon_class' => 'voyager-hook',
                'id' => 11,
                'menu_id' => 1,
                'order' => 5,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.hooks',
                'target' => '_self',
                'title' => 'Hooks',
                'updated_at' => '2021-05-14 15:50:18',
                'url' => '',
            ),
            11 => 
            array (
                'color' => NULL,
                'created_at' => '2021-05-14 15:48:35',
                'icon_class' => 'voyager-categories',
                'id' => 14,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => NULL,
                'parent_id' => 16,
                'route' => 'voyager.categories.index',
                'target' => '_self',
                'title' => 'Categories',
                'updated_at' => '2021-05-14 16:01:14',
                'url' => '',
            ),
            12 => 
            array (
                'color' => NULL,
                'created_at' => '2021-05-14 15:57:04',
                'icon_class' => 'voyager-video',
                'id' => 15,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => 16,
                'route' => 'voyager.videos.index',
                'target' => '_self',
                'title' => 'Videos',
                'updated_at' => '2021-05-14 16:01:15',
                'url' => '',
            ),
            13 => 
            array (
                'color' => '#000000',
                'created_at' => '2021-05-14 16:01:03',
                'icon_class' => 'voyager-list-add',
                'id' => 16,
                'menu_id' => 1,
                'order' => 5,
                'parameters' => '',
                'parent_id' => NULL,
                'route' => NULL,
                'target' => '_self',
                'title' => 'Add New Item',
                'updated_at' => '2021-05-14 16:11:29',
                'url' => '',
            ),
            14 => 
            array (
                'color' => '#000000',
                'created_at' => '2021-05-14 16:09:55',
                'icon_class' => 'voyager-photos',
                'id' => 17,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => 'null',
                'parent_id' => 16,
                'route' => 'voyager.resources.index',
                'target' => '_self',
                'title' => 'Resources',
                'updated_at' => '2021-05-14 16:13:33',
                'url' => '',
            ),
        ));
        
        
    }
}
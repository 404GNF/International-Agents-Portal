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
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-14 15:50:18',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-13 17:26:15',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-14 16:11:35',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-14 15:50:18',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-14 15:50:18',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-14 15:50:18',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-14 15:50:18',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-14 16:11:35',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 5,
                'created_at' => '2021-05-13 17:26:15',
                'updated_at' => '2021-05-14 15:50:18',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Categories',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => 16,
                'order' => 1,
                'created_at' => '2021-05-14 15:48:35',
                'updated_at' => '2021-05-14 16:01:14',
                'route' => 'voyager.categories.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Videos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-video',
                'color' => NULL,
                'parent_id' => 16,
                'order' => 2,
                'created_at' => '2021-05-14 15:57:04',
                'updated_at' => '2021-05-14 16:01:15',
                'route' => 'voyager.videos.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Add New Item',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list-add',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2021-05-14 16:01:03',
                'updated_at' => '2021-05-14 16:11:29',
                'route' => NULL,
                'parameters' => '',
            ),
            14 => 
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Resources',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-photos',
                'color' => '#000000',
                'parent_id' => 16,
                'order' => 3,
                'created_at' => '2021-05-14 16:09:55',
                'updated_at' => '2021-05-14 16:13:33',
                'route' => 'voyager.resources.index',
                'parameters' => 'null',
            ),
            15 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Personal Stories',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => '#000000',
                'parent_id' => 16,
                'order' => 4,
                'created_at' => '2021-05-19 17:06:14',
                'updated_at' => '2021-05-30 11:14:50',
                'route' => 'voyager.personal-stories.index',
                'parameters' => 'null',
            ),
        ));
        
        
    }
}
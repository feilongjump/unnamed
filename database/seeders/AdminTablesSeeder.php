<?php

namespace Database\Seeders;

use Dcat\Admin\Models;
use Illuminate\Database\Seeder;
use DB;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        Models\Menu::truncate();
        Models\Menu::insert(
            [
                [
                    "created_at" => "2021-08-05 17:32:50",
                    "extension" => "",
                    "icon" => "feather icon-bar-chart-2",
                    "id" => 1,
                    "order" => 1,
                    "parent_id" => 0,
                    "show" => 1,
                    "title" => "主页",
                    "updated_at" => NULL,
                    "uri" => "/"
                ],
                [
                    "created_at" => "2021-08-05 17:32:50",
                    "extension" => "",
                    "icon" => "feather icon-settings",
                    "id" => 2,
                    "order" => 2,
                    "parent_id" => 0,
                    "show" => 1,
                    "title" => "系统管理",
                    "updated_at" => NULL,
                    "uri" => ""
                ],
                [
                    "created_at" => "2021-08-05 17:32:50",
                    "extension" => "",
                    "icon" => "",
                    "id" => 3,
                    "order" => 3,
                    "parent_id" => 2,
                    "show" => 1,
                    "title" => "管理员",
                    "updated_at" => NULL,
                    "uri" => "auth/users"
                ],
                [
                    "created_at" => "2021-08-05 17:32:50",
                    "extension" => "",
                    "icon" => "",
                    "id" => 4,
                    "order" => 4,
                    "parent_id" => 2,
                    "show" => 1,
                    "title" => "角色",
                    "updated_at" => NULL,
                    "uri" => "auth/roles"
                ],
                [
                    "created_at" => "2021-08-05 17:32:50",
                    "extension" => "",
                    "icon" => "",
                    "id" => 5,
                    "order" => 5,
                    "parent_id" => 2,
                    "show" => 1,
                    "title" => "权限",
                    "updated_at" => NULL,
                    "uri" => "auth/permissions"
                ],
                [
                    "created_at" => "2021-08-05 17:32:50",
                    "extension" => "",
                    "icon" => "",
                    "id" => 6,
                    "order" => 6,
                    "parent_id" => 2,
                    "show" => 1,
                    "title" => "菜单",
                    "updated_at" => NULL,
                    "uri" => "auth/menu"
                ]
            ]
        );

        Models\Permission::truncate();
        Models\Permission::insert(
            [
                [
                    "created_at" => "2021-08-05 17:32:50",
                    "http_method" => "",
                    "http_path" => "",
                    "id" => 1,
                    "name" => "Auth management",
                    "order" => 1,
                    "parent_id" => 0,
                    "slug" => "auth-management",
                    "updated_at" => NULL
                ],
                [
                    "created_at" => "2021-08-05 17:32:50",
                    "http_method" => "",
                    "http_path" => "/auth/users*",
                    "id" => 2,
                    "name" => "Users",
                    "order" => 2,
                    "parent_id" => 1,
                    "slug" => "users",
                    "updated_at" => NULL
                ],
                [
                    "created_at" => "2021-08-05 17:32:50",
                    "http_method" => "",
                    "http_path" => "/auth/roles*",
                    "id" => 3,
                    "name" => "Roles",
                    "order" => 3,
                    "parent_id" => 1,
                    "slug" => "roles",
                    "updated_at" => NULL
                ],
                [
                    "created_at" => "2021-08-05 17:32:50",
                    "http_method" => "",
                    "http_path" => "/auth/permissions*",
                    "id" => 4,
                    "name" => "Permissions",
                    "order" => 4,
                    "parent_id" => 1,
                    "slug" => "permissions",
                    "updated_at" => NULL
                ],
                [
                    "created_at" => "2021-08-05 17:32:50",
                    "http_method" => "",
                    "http_path" => "/auth/menu*",
                    "id" => 5,
                    "name" => "Menu",
                    "order" => 5,
                    "parent_id" => 1,
                    "slug" => "menu",
                    "updated_at" => NULL
                ],
                [
                    "created_at" => "2021-08-05 17:32:50",
                    "http_method" => "",
                    "http_path" => "/auth/extensions*",
                    "id" => 6,
                    "name" => "Extension",
                    "order" => 6,
                    "parent_id" => 1,
                    "slug" => "extension",
                    "updated_at" => NULL
                ]
            ]
        );

        Models\Role::truncate();
        Models\Role::insert(
            [
                [
                    "created_at" => "2021-08-05 17:32:50",
                    "id" => 1,
                    "name" => "Administrator",
                    "slug" => "administrator",
                    "updated_at" => "2021-08-05 17:32:50"
                ]
            ]
        );

        Models\Setting::truncate();
		Models\Setting::insert(
			[

            ]
		);

		Models\Extension::truncate();
		Models\Extension::insert(
			[

            ]
		);

		Models\ExtensionHistory::truncate();
		Models\ExtensionHistory::insert(
			[

            ]
		);

        // pivot tables
        DB::table('admin_permission_menu')->truncate();
		DB::table('admin_permission_menu')->insert(
			[

            ]
		);

        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [

            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [

            ]
        );

        // finish
    }
}

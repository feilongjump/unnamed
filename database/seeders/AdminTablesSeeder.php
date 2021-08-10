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
                    "id" => 1,
                    "parent_id" => 0,
                    "order" => 1,
                    "title" => "主页",
                    "icon" => "feather icon-bar-chart-2",
                    "uri" => "/",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-08-05 17:32:50",
                    "updated_at" => NULL
                ],
                [
                    "id" => 2,
                    "parent_id" => 0,
                    "order" => 2,
                    "title" => "系统管理",
                    "icon" => "feather icon-settings",
                    "uri" => "",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-08-05 17:32:50",
                    "updated_at" => NULL
                ],
                [
                    "id" => 3,
                    "parent_id" => 2,
                    "order" => 3,
                    "title" => "管理员",
                    "icon" => "",
                    "uri" => "auth/users",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-08-05 17:32:50",
                    "updated_at" => NULL
                ],
                [
                    "id" => 4,
                    "parent_id" => 2,
                    "order" => 4,
                    "title" => "角色",
                    "icon" => "",
                    "uri" => "auth/roles",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-08-05 17:32:50",
                    "updated_at" => NULL
                ],
                [
                    "id" => 5,
                    "parent_id" => 2,
                    "order" => 5,
                    "title" => "权限",
                    "icon" => "",
                    "uri" => "auth/permissions",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-08-05 17:32:50",
                    "updated_at" => NULL
                ],
                [
                    "id" => 6,
                    "parent_id" => 2,
                    "order" => 6,
                    "title" => "菜单",
                    "icon" => "",
                    "uri" => "auth/menu",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-08-05 17:32:50",
                    "updated_at" => NULL
                ],
                [
                    "id" => 7,
                    "parent_id" => 0,
                    "order" => 7,
                    "title" => "基础数据",
                    "icon" => "fa-bars",
                    "uri" => NULL,
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-08-06 10:00:00",
                    "updated_at" => "2021-08-06 10:01:46"
                ],
                [
                    "id" => 8,
                    "parent_id" => 7,
                    "order" => 8,
                    "title" => "厂家管理",
                    "icon" => NULL,
                    "uri" => "manufacturers",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-08-06 10:01:27",
                    "updated_at" => "2021-08-06 10:01:27"
                ],
                [
                    "id" => 9,
                    "parent_id" => 7,
                    "order" => 9,
                    "title" => "客户管理",
                    "icon" => NULL,
                    "uri" => "customers",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-08-09 16:28:57",
                    "updated_at" => "2021-08-09 16:28:57"
                ],
                [
                    "id" => 10,
                    "parent_id" => 7,
                    "order" => 10,
                    "title" => "物料管理",
                    "icon" => NULL,
                    "uri" => "materials",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-08-09 16:56:13",
                    "updated_at" => "2021-08-09 16:56:13"
                ],
                [
                    "id" => 11,
                    "parent_id" => 7,
                    "order" => 11,
                    "title" => "样品档案",
                    "icon" => NULL,
                    "uri" => "showpieces",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2021-08-10 14:35:26",
                    "updated_at" => "2021-08-10 14:35:26"
                ]
            ]
        );

        Models\Permission::truncate();
        Models\Permission::insert(
            [
                [
                    "id" => 1,
                    "name" => "Auth management",
                    "slug" => "auth-management",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 1,
                    "parent_id" => 0,
                    "created_at" => "2021-08-05 17:32:50",
                    "updated_at" => NULL
                ],
                [
                    "id" => 2,
                    "name" => "Users",
                    "slug" => "users",
                    "http_method" => "",
                    "http_path" => "/auth/users*",
                    "order" => 2,
                    "parent_id" => 1,
                    "created_at" => "2021-08-05 17:32:50",
                    "updated_at" => NULL
                ],
                [
                    "id" => 3,
                    "name" => "Roles",
                    "slug" => "roles",
                    "http_method" => "",
                    "http_path" => "/auth/roles*",
                    "order" => 3,
                    "parent_id" => 1,
                    "created_at" => "2021-08-05 17:32:50",
                    "updated_at" => NULL
                ],
                [
                    "id" => 4,
                    "name" => "Permissions",
                    "slug" => "permissions",
                    "http_method" => "",
                    "http_path" => "/auth/permissions*",
                    "order" => 4,
                    "parent_id" => 1,
                    "created_at" => "2021-08-05 17:32:50",
                    "updated_at" => NULL
                ],
                [
                    "id" => 5,
                    "name" => "Menu",
                    "slug" => "menu",
                    "http_method" => "",
                    "http_path" => "/auth/menu*",
                    "order" => 5,
                    "parent_id" => 1,
                    "created_at" => "2021-08-05 17:32:50",
                    "updated_at" => NULL
                ],
                [
                    "id" => 6,
                    "name" => "Extension",
                    "slug" => "extension",
                    "http_method" => "",
                    "http_path" => "/auth/extensions*",
                    "order" => 6,
                    "parent_id" => 1,
                    "created_at" => "2021-08-05 17:32:50",
                    "updated_at" => NULL
                ]
            ]
        );

        Models\Role::truncate();
        Models\Role::insert(
            [
                [
                    "id" => 1,
                    "name" => "Administrator",
                    "slug" => "administrator",
                    "created_at" => "2021-08-05 17:32:50",
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
                [
                    "id" => 1,
                    "name" => "dcat-admin.form-step",
                    "version" => "1.0.0",
                    "is_enabled" => 1,
                    "options" => NULL,
                    "created_at" => "2021-08-09 16:29:08",
                    "updated_at" => "2021-08-09 16:29:10"
                ]
            ]
		);

		Models\ExtensionHistory::truncate();
		Models\ExtensionHistory::insert(
			[
                [
                    "id" => 1,
                    "name" => "dcat-admin.form-step",
                    "type" => 1,
                    "version" => "1.0.0",
                    "detail" => "Initialize extension.",
                    "created_at" => "2021-08-09 16:29:08",
                    "updated_at" => "2021-08-09 16:29:08"
                ]
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

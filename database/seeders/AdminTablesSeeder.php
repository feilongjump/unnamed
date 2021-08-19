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
                    "order" => 9,
                    "parent_id" => 0,
                    "show" => 1,
                    "title" => "系统管理",
                    "updated_at" => "2021-08-11 17:41:51",
                    "uri" => ""
                ],
                [
                    "created_at" => "2021-08-05 17:32:50",
                    "extension" => "",
                    "icon" => "",
                    "id" => 3,
                    "order" => 10,
                    "parent_id" => 2,
                    "show" => 1,
                    "title" => "管理员",
                    "updated_at" => "2021-08-11 17:41:51",
                    "uri" => "auth/users"
                ],
                [
                    "created_at" => "2021-08-05 17:32:50",
                    "extension" => "",
                    "icon" => "",
                    "id" => 4,
                    "order" => 11,
                    "parent_id" => 2,
                    "show" => 1,
                    "title" => "角色",
                    "updated_at" => "2021-08-11 17:41:51",
                    "uri" => "auth/roles"
                ],
                [
                    "created_at" => "2021-08-05 17:32:50",
                    "extension" => "",
                    "icon" => "",
                    "id" => 5,
                    "order" => 12,
                    "parent_id" => 2,
                    "show" => 1,
                    "title" => "权限",
                    "updated_at" => "2021-08-11 17:41:51",
                    "uri" => "auth/permissions"
                ],
                [
                    "created_at" => "2021-08-05 17:32:50",
                    "extension" => "",
                    "icon" => "",
                    "id" => 6,
                    "order" => 13,
                    "parent_id" => 2,
                    "show" => 1,
                    "title" => "菜单",
                    "updated_at" => "2021-08-11 17:41:51",
                    "uri" => "auth/menu"
                ],
                [
                    "created_at" => "2021-08-06 10:00:00",
                    "extension" => "",
                    "icon" => "fa-bars",
                    "id" => 7,
                    "order" => 4,
                    "parent_id" => 0,
                    "show" => 1,
                    "title" => "基础数据",
                    "updated_at" => "2021-08-11 17:41:51",
                    "uri" => NULL
                ],
                [
                    "created_at" => "2021-08-06 10:01:27",
                    "extension" => "",
                    "icon" => NULL,
                    "id" => 8,
                    "order" => 5,
                    "parent_id" => 7,
                    "show" => 1,
                    "title" => "厂家管理",
                    "updated_at" => "2021-08-11 17:41:51",
                    "uri" => "manufacturers"
                ],
                [
                    "created_at" => "2021-08-09 16:28:57",
                    "extension" => "",
                    "icon" => NULL,
                    "id" => 9,
                    "order" => 6,
                    "parent_id" => 7,
                    "show" => 1,
                    "title" => "客户管理",
                    "updated_at" => "2021-08-11 17:41:51",
                    "uri" => "customers"
                ],
                [
                    "created_at" => "2021-08-09 16:56:13",
                    "extension" => "",
                    "icon" => NULL,
                    "id" => 10,
                    "order" => 7,
                    "parent_id" => 7,
                    "show" => 1,
                    "title" => "物料管理",
                    "updated_at" => "2021-08-11 17:41:51",
                    "uri" => "materials"
                ],
                [
                    "created_at" => "2021-08-10 14:35:26",
                    "extension" => "",
                    "icon" => NULL,
                    "id" => 11,
                    "order" => 8,
                    "parent_id" => 7,
                    "show" => 1,
                    "title" => "样品档案",
                    "updated_at" => "2021-08-11 17:41:51",
                    "uri" => "showpieces"
                ],
                [
                    "created_at" => "2021-08-11 17:41:22",
                    "extension" => "",
                    "icon" => "fa-reorder",
                    "id" => 12,
                    "order" => 2,
                    "parent_id" => 0,
                    "show" => 1,
                    "title" => "销售管理",
                    "updated_at" => "2021-08-11 17:41:51",
                    "uri" => NULL
                ],
                [
                    "created_at" => "2021-08-11 17:41:44",
                    "extension" => "",
                    "icon" => NULL,
                    "id" => 13,
                    "order" => 3,
                    "parent_id" => 12,
                    "show" => 1,
                    "title" => "报价单",
                    "updated_at" => "2021-08-11 17:41:51",
                    "uri" => "quotes"
                ],
                [
                    "created_at" => "2021-08-18 09:42:53",
                    "extension" => "",
                    "icon" => NULL,
                    "id" => 14,
                    "order" => 14,
                    "parent_id" => 12,
                    "show" => 1,
                    "title" => "订单",
                    "updated_at" => "2021-08-18 09:42:53",
                    "uri" => "orders"
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
                [
                    "created_at" => "2021-08-09 16:29:08",
                    "id" => 1,
                    "is_enabled" => 1,
                    "name" => "dcat-admin.form-step",
                    "options" => NULL,
                    "updated_at" => "2021-08-09 16:29:10",
                    "version" => "1.0.0"
                ]
            ]
		);

		Models\ExtensionHistory::truncate();
		Models\ExtensionHistory::insert(
			[
                [
                    "created_at" => "2021-08-09 16:29:08",
                    "detail" => "Initialize extension.",
                    "id" => 1,
                    "name" => "dcat-admin.form-step",
                    "type" => 1,
                    "updated_at" => "2021-08-09 16:29:08",
                    "version" => "1.0.0"
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

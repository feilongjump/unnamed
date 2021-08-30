<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resource('manufacturers', 'ManufacturersController');
    $router->resource('customers', 'CustomersController');
    $router->resource('materials', 'MaterialsController');
    $router->resource('showpieces', 'ShowpiecesController');
    $router->resource('quotes', 'QuotesController');
    $router->resource('orders', 'OrdersController');
    $router->resource('contracts', 'ContractsController');

    /**
     * API
     */
    $router->group([
        'prefix'     => config('admin.route.api_prefix'),
        'namespace'  => config('admin.route.api_namespace'),
        'middleware' => config('admin.route.api_middleware'),
    ], function (Router $router) {

        $router->get('manufacturers', 'ManufacturersController@index');
        $router->get('customers', 'CustomersController@index');
        $router->get('customers/contacts', 'CustomersController@contacts');

    });
});

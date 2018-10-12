<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    /*$router->resource('customer', CustomerController::class);
    $router->resource('customer_detail', CustomerDetailController::class);
    $router->resource('customer_spot', CustomerSpotController::class);
    $router->resource('customer_stock', CustomerStockController::class);
    $router->resource('staff', StaffController::class);*/
    $router->resource('sales_area', SalesAreaController::class);
    $router->resource('prefecture', PrefectureController::class);
    $router->resource('division', DivisionController::class);
    $router->resource('department', DepartmentController::class);
    $router->resource('employee', EmployeeController::class);
    // $router->resource('hotel_status', HotelStatusController::class);
    $router->resource('transaction_status', TransactionStatusController::class);
    $router->resource('sales_status', SalesStatusController::class);
    $router->resource('hotel_group', HotelGroupController::class);
    $router->resource('facility', FacilityController::class);
    $router->resource('facility_information', FacilityInformationController::class);
});

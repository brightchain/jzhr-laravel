<?php

use Illuminate\Routing\Router;

Admin::registerHelpersRoutes();

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('slide', SlideController::class);
    $router->resource('webinfo', WebinfoController::class);
    $router->resource('posts', PostsController::class);
    $router->resource('company',CompanyController::class);
    $router->resource('teams',TeamsController::class);
    $router->resource('product',ProductsController::class);
    $router->resource('jobs',JobsController::class);
    $router->resource('projects',ProjectsController::class);
});


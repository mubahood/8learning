<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('dashboard', 'HomeController@index')->name('home');
    $router->resource('course-categories', CourseCategoryController::class);
    $router->resource('dashboard-courses', CourseController::class);
    $router->resource('settings-1', UserController::class);
    $router->resource('participants', ParticipantController::class);
    $router->resource('dashboard-course-topics', CourseTopicController::class);
    $router->resource('dashboard-publications', PublicationController::class);
    $router->resource('dashboard-s-m-s-intergrations', SMSIntergrationController::class);
});

<?php

Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('/','Admin\DashboardController@index', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');

    Route::get('/projects', 'Admin\ProjectsController@index')->name('admin.projects');

    Route::get('/tasks', 'Admin\TasksController@index')->name('admin.tasks');

	});

});
<?php

Route::group(['namespace' => '\Modules\Activity\Http\Controllers', 'middleware' => 'web'], function () {
    /**
     * ROUTES FOR ADMIN: Activity
     */
    Route::group(['middleware' => ['auth'], 'prefix' => config('cms.admin_prefix') . '/activities'], function () {
        Route::get('/', [
            'as' => 'activity.admin.list',
            'uses' => 'ActivityController@index',
            'permission' => 'activity.admin.list',
        ]);
        Route::get('create', [
            'as' => 'activity.admin.create',
            'uses' => 'ActivityController@create',
            'permission' => 'activity.admin.create',
        ]);
        Route::post('create', [
            'as' => 'activity.admin.create',
            'uses' => 'ActivityController@store',
            'permission' => 'activity.admin.create',
        ]);
        Route::get('edit/{id}', [
            'as' => 'activity.admin.edit',
            'uses' => 'ActivityController@edit',
            'permission' => 'activity.admin.edit',
        ]);
        Route::post('edit/{id}', [
            'as' => 'activity.admin.edit',
            'uses' => 'ActivityController@update',
            'permission' => 'activity.admin.edit',
        ]);
        Route::get('delete/{id}', [
            'as' => 'activity.admin.delete',
            'uses' => 'ActivityController@delete',
            'permission' => 'activity.admin.delete',
        ]);
    });
});

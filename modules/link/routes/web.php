<?php

Route::group(['namespace' => '\Modules\Link\Http\Controllers', 'middleware' => 'web'], function () {
    /**
     * ROUTES FOR ADMIN: Link
     */
    Route::group(['middleware' => ['auth'], 'prefix' => config('cms.admin_prefix') . '/links'], function () {
        Route::get('/', [
            'as' => 'link.admin.index',
            'uses' => 'LinkController@index',
            'permission' => 'link.admin.index',
        ]);
        Route::get('create', [
            'as' => 'link.admin.create',
            'uses' => 'LinkController@create',
            'permission' => 'link.admin.create',
        ]);
        Route::post('create', [
            'as' => 'link.admin.create',
            'uses' => 'LinkController@store',
            'permission' => 'link.admin.create',
        ]);
        Route::get('edit/{id}', [
            'as' => 'link.admin.edit',
            'uses' => 'LinkController@edit',
            'permission' => 'link.admin.create',
        ]);
        Route::post('edit/{id}', [
            'as' => 'link.admin.edit',
            'uses' => 'LinkController@update',
            'permission' => 'link.admin.create',
        ]);
        Route::get('delete/{id}', [
            'as' => 'link.admin.delete',
            'uses' => 'LinkController@delete',
            'permission' => 'link.admin.delete',
        ]);
    });
});

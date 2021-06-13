<?php

Route::group(['namespace' => '\Modules\Page\Http\Controllers', 'middleware' => 'web'], function () {
    /**
     * ROUTES FOR ADMIN: Page
     */
    Route::group(['middleware' => ['auth'], 'prefix' => config('cms.admin_prefix') . '/pages'], function () {
        Route::get('/', [
            'as' => 'page.admin.list',
            'uses' => 'PageController@index',
            'permission' => 'page.admin.list',
        ]);
        Route::get('create', [
            'as' => 'page.admin.create',
            'uses' => 'PageController@create',
            'permission' => 'page.admin.create',
        ]);
        Route::post('create', [
            'as' => 'page.admin.create',
            'uses' => 'PageController@store',
            'permission' => 'page.admin.create',
        ]);
        Route::get('edit/{id}', [
            'as' => 'page.admin.edit',
            'uses' => 'PageController@edit',
            'permission' => 'page.admin.edit',
        ]);
        Route::post('edit/{id}', [
            'as' => 'page.admin.edit',
            'uses' => 'PageController@update',
            'permission' => 'page.admin.edit',
        ]);
        Route::get('delete/{id}', [
            'as' => 'page.admin.delete',
            'uses' => 'PageController@delete',
            'permission' => 'page.admin.delete',
        ]);
        Route::post('changePage', [
            'as' => 'page.admin.ajaxchangepage',
            'uses' => 'PageController@ajaxChangePage',
            'permission' => 'dashboard',
        ]);
        Route::post('changeStatus', [
            'as' => 'page.admin.ajaxchangestatus',
            'uses' => 'PageController@ajaxChangeStatus',
            'permission' => 'dashboard'
        ]);
    });
    Route::group(['middleware' => ['web']], function () {
        Route::get('/trang/{slug}', 'WebController@detail')->name('page.web.page');
    });
});

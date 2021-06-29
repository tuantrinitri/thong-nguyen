<?php

Route::group(['namespace' => '\Modules\Page\Http\Controllers', 'middleware' => 'web'], function () {
    /**
     * ROUTES FOR ADMIN: Page
     */
    Route::group(['middleware' => ['auth'], 'prefix' => config('cms.admin_prefix') . '/pages'], function () {
        Route::get('/', [
            'as' => 'page.admin.list',
            'uses' => 'PageController@getList'
        ]);
        Route::get('create', [
            'as' => 'page.admin.create',
            'uses' => 'PageController@getCreate'
        ]);
        Route::post('create', [
            'as' => 'page.admin.create',
            'uses' => 'PageController@postCreate'
        ]);
        Route::get('edit/{id}', [
            'as' => 'page.admin.edit',
            'uses' => 'PageController@getEdit'
        ]);
        Route::post('edit/{id}', [
            'as' => 'page.admin.edit',
            'uses' => 'PageController@postEdit'
        ]);
        Route::get('delete/{id}', [
            'as' => 'page.admin.delete',
            'uses' => 'PageController@getDelete'
        ]);
        Route::post('changePage', [
            'as' => 'page.admin.ajaxchangepage',
            'uses' => 'PageController@ajaxChangPage'
        ]);
        Route::post('changeStatus', [
            'as' => 'page.admin.ajaxchangestatus',
            'uses' => 'PageController@ajaxChangeStatus'
        ]);
        Route::post('getslug', [
            'as' => 'get-slug-page',
            'uses' => 'PageController@postGetSlugPage'
        ]);
    });
});
Route::group(['namespace' => '\Modules\Page\Http\Controllers', 'prefix' => 'page'], function () {
    Route::get('/{slug}', [
        'as' => 'get-details-page',
        'uses' => 'WebController@getDetailPage'
    ]);
});

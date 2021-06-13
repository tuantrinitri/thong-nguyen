<?php

Route::group(['namespace' => '\Modules\Tour\Http\Controllers', 'middleware' => 'web'], function () {
    /**
     * ROUTES FOR ADMIN: Tour
     */
    Route::group(['middleware' => ['auth'], 'prefix' => config('cms.admin_prefix') . '/tours'], function () {
        Route::get('/', [
            'as' => 'tour.admin.list',
            'uses' => 'TourController@getList'
        ]);
        Route::get('create', [
            'as' => 'tour.admin.create',
            'uses' => 'TourController@getCreate'
        ]);
        Route::post('create', [
            'as' => 'tour.admin.create',
            'uses' => 'TourController@postCreate'
        ]);
        Route::get('edit/{id}', [
            'as' => 'tour.admin.edit',
            'uses' => 'TourController@getEdit'
        ]);
        Route::post('edit/{id}', [
            'as' => 'tour.admin.edit',
            'uses' => 'TourController@postEdit'
        ]);
        Route::get('delete/{id}', [
            'as' => 'tour.admin.delete',
            'uses' => 'TourController@getDelete'
        ]);
    });
});

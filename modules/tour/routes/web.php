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
            'uses' => 'TourController@create'
        ]);
        Route::post('create', [
            'as' => 'tour.admin.create',
            'uses' => 'TourController@store'
        ]);
        Route::get('edit/{id}', [
            'as' => 'tour.admin.edit',
            'uses' => 'TourController@edit'
        ]);
        Route::post('edit/{id}', [
            'as' => 'tour.admin.edit',
            'uses' => 'TourController@update'
        ]);
        Route::get('delete/{id}', [
            'as' => 'tour.admin.delete',
            'uses' => 'TourController@delete'
        ]);

        Route::get('location', [
            // 'as' => 'tour.admin.delete',
            'uses' => 'TourController@location'
        ]);

        Route::get('booking', [
            'as' => 'tour.admin.booking',
            'uses' => 'TourController@booking'
        ]);

        Route::get('booking/cancel/{id}', [
            'as' => 'tour.admin.cancel',
            'uses' => 'TourController@cancel'
        ]);
    });
});


/**
 * ROUTES FOR WEB: TOur
 */
Route::group(['namespace' => '\Modules\Tour\Http\Controllers'], function () {

    Route::get('danh-sach-tour', [
        'as' => 'web.tour.list',
        'uses' => 'WebController@listTour'
    ]);

    Route::get('chi-tiet-tours/{id}', [
        'as' => 'web.tour.detail',
        'uses' => 'WebController@tour'
    ]);

    Route::get('dat-tours/{id}', [
        'as' => 'web.tour.booking',
        'uses' => 'WebController@booking'
    ]);


    Route::post('dat-tours/{id}', [
        'as' => 'web.tour.booking',
        'uses' => 'WebController@bookingStore'
    ]);
});
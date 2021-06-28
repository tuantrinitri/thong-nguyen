<?php

Route::group(['namespace' => '\Modules\Web\Http\Controllers', 'middleware' => 'web'], function () {
    Route::get('/', [
        'as' => 'web.index',
        'uses' => 'WebController@index',
    ]);

    Route::get('tourdetail',[
        'as' => 'web.tourdetail',
        'uses' => 'WebController@tourdetail',
    ]);

    Route::get('booking', [
        'as' => 'web.booking',
        'uses' => 'WebController@booking',
    ]);

    Route::get('contact', [
        'as' => 'web.contact',
        'uses' => 'WebController@contact',
    ]);

    Route::get('tourtype', [
        'as' => 'web.tourtype',
        'uses' => 'WebController@tourtype',
    ]);

    Route::get('search', [
        'as' => 'web.search',
        'uses' => 'WebController@search',
    ]);

    Route::get('category', [
        'as' => 'web.category',
        'uses' => 'WebController@category',
    ]);

    Route::get('post', [
        'as' => 'web.post',
        'uses' => 'WebController@post',
    ]);

});

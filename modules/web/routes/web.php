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

});

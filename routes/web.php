<?php


Route::group(['middleware'=>['web']],function(){
//zones route
Route::post('/zones/save',[
    'uses'=>'ZoneController@submitZone',
    'as'=>'zones.create',
]);

Route::get('/',[
    'uses'=>'GeneralController@login',
    'as'=>'newlogin',
]);
});

Route::group(['prefix' => 'user'], function () {
    Voyager::routes();

    Route::get('/zones',[
    	'uses'=>'GeneralController@zones',
    	'as'=>'user.zones',
    ]);
    Route::get('/zones/live',[
        'uses'=>'GeneralController@live',
        'as'=>'user.live',
    ]);
    
    Route::get('/notifications',[
    	'uses'=>'GeneralController@notifications',
    	'as'=>'user.notify',
    ]);
    Route::get('/survey',[
        'uses'=>'GeneralController@survey',
        'as'=>'user.survey',
    ]);
    Route::get('/survey/details/{id}',[
        'uses'=>'GeneralController@zoneDetails',
        'as'=>'user.zones.details',
    ]);
});

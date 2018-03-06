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
    Route::get('/report',[
        'uses'=>'ReportController@reports',
        'as'=>'user.reports',
    ]);
    Route::post('/report/save',[
        'uses'=>'ReportController@submitReport',
        'as'=>'user.reports.save',
    ]);
    //
    Route::get('/report/Daily',[
        'uses'=>'ReportController@dailyReport',
        'as'=>'user.reports.return',
    ]);

    Route::get('/zones',[
    	'uses'=>'GeneralController@zones',
    	'as'=>'user.zones',
    ]);
    Route::get('/zones/live',[
        'uses'=>'GeneralController@live',
        'as'=>'user.live',
    ]);
       Route::get('/zones/live/regiondata',[
        'uses'=>'GeneralController@region',
        'as'=>'user.regiondata',
    ]);
       Route::get('/zones/live/rounddata',[
        'uses'=>'GeneralController@round',
        'as'=>'user.rounddata',
    ]);
       Route::get('/zones/live/plotdata',[
        'uses'=>'GeneralController@plot',
        'as'=>'user.plotdata',
    ]);
    
    Route::get('/notifications',[
    	'uses'=>'GeneralController@notifications',
    	'as'=>'user.notify',
    ]);
    Route::get('/survey',[
        'uses'=>'GeneralController@survey',
        'as'=>'user.survey',
    ]);
    Route::get('/survey/blocks/{id}',[
        'uses'=>'GeneralController@zoneBlockDetails',
        'as'=>'user.zones.block',
    ]);
    Route::get('/survey/blocks/rounds/{id}',[
        'uses'=>'GeneralController@zoneRoundDetails',
        'as'=>'user.zones.round',
    ]);
    Route::get('/survey/blocks/rounds/plots/{id}',[
        'uses'=>'GeneralController@zonePlotDetails',
        'as'=>'user.zones.plot',
    ]);
    Route::get('/survey/blocks/rounds/plots/plotdetails/{id}',[
        'uses'=>'GeneralController@zonePlotDetailsOfPlot',
        'as'=>'user.zones.plotdetails',
    ]);
    Route::get('/survey/blocks/rounds/plots/plotdetails/notify',[
        'uses'=>'PlotController@sendNotification',
        'as'=>'user.register.notify',
    ]);
});

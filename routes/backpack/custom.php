<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes

    Route::resource('job', 'JobCrudController');
    Route::post('job/search', 'JobCrudController@search');

    Route::resource('cv', 'CurriculumVitaeCrudController');
    Route::post('cv/search', 'CurriculumVitaeCrudController@search');

    Route::resource('apply', 'ApplyCrudController');
    Route::post('apply/search', 'ApplyCrudController@search');
    Route::get('apply/review/{id}','ApplyCrudController@detail');
    Route::get('apply/check/{id}/{status}',['as' => 'admin.apply.cv', 'uses' => 'ApplyCrudController@checkCV']);
}); // this should be the absolute last line of this file


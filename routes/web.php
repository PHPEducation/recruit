<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('demo', function () {
    return view('frontend.curriculum_vitaes.template');
});

if (Config::get('settings.cvs_page') != null) {
    Route::group(['middleware' => 'admin', 'namespace' => 'Frontend', 'prefix' => Config::get('settings.cvs_page')], function () {
        Route::get('/create', ['as' => 'frontend.cv.create.get', 'uses' => 'CurriculumVitaeController@create']);
        Route::post('/create/{cv_id}', ['as' => 'frontend.cv.update.post', 'uses' => 'CurriculumVitaeController@update']);
        Route::get('/edit/{cv_id}', ['as' => 'frontend.cv.edit.get', 'uses' => 'CurriculumVitaeController@edit']);
        Route::post('/uploads', ['as' => 'front.user.upload.external_sources', 'uses' => 'CurriculumVitaeController@upload_resources']);
        Route::get('/apply/{job_id}', ['as' => 'frontend.job.apply.get', 'uses' => 'CurriculumVitaeController@apply']);
        Route::get('/apply/{job_id}/{cv_id}', ['as' => 'frontend.cv.apply.get', 'uses' => 'CurriculumVitaeController@applyCV']);
        Route::get('/response/{status}', ['as' => 'frontend.jobs.apply.response', 'uses' => 'CurriculumVitaeController@response']);

        Route::get('/{subs?}', ['uses' => 'CurriculumVitaeController@index'])->where(['subs' => '.*']);

    });

}

if (Config::get('settings.jobs_page') != null) {
    /** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
    Route::get(\Illuminate\Support\Facades\Config::get('settings.jobs_page') . '/{subs?}', ['uses' => 'Frontend\JobController@index'])
        ->where(['subs' => '.*']);

}

/** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
Route::get('{page}/{subs?}', ['uses' => 'Frontend\PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);


Route::group([
    'namespace' => 'Admin',
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', backpack_middleware()],
], function () {
    CRUD::resource('user', 'UserCrudController');
});

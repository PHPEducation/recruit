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


if (Config::get('settings.cvs_page') != null) {
    /** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
    Route::get(\Illuminate\Support\Facades\Config::get('settings.cvs_page') . '/{subs?}', ['uses' => 'Frontend\CuriculumVitaeController@index'])
        ->where(['subs' => '.*']);

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

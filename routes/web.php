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

Route::get('/', function () {
    return view('home');
});
Route::get('/tours', function () {
    return view('tours');
});
Route::get('/planner', function () {
    return view('planner');
});
$router->group(['prefix' => 'trip'], function($app)
{
	$app->get('','TripController@tripPlannerByCity');
	//$app->post('add','PlacesController@create');
	//$app->put('edit/{id}','PlacesController@update');
	//$app->delete('delete/{id}','PlacesController@destroy');
	//$app->get('index','PlacesController@index');
    //$app->get('bycityid/{id}','PlacesController@getPlacesByCityId');
    //$app->get('bycityname/{name}','PlacesController@getPlacesByCityName');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/insurance',function(){
    return view('insurance');
});
?>
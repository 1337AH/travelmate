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
     return view('home1');
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



// Route::get('/login',function(){
//     return view('login');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index');
// Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

// Route::prefix('admin')->group(function() {
//   Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//   Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//   Route::get('/', 'AdminController@index')->name('admin.dashboard');
//   Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');


// //Password Reset routes

//     Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
//     Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
//     Route::post('/password/email','Auth\AdminResetPasswordController@reset');
//     Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset'); 
//     // 'admin.password.reset' is placed into AdminResetPasswordController, function 'toMail' , argument 'route'
// });

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  // Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
?>

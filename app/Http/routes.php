<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
use Carbon\Carbon; 

$app->group(['prefix' => 'api', 'namespace' => 'App\Http\Controllers'], function () use ($app)
{
	//GET ALL CATEGORIES
	$app->get('categories', 'BookingsController@categories');

	//GET ALL BOOKINGS
	$app->get('bookings', 'BookingsController@all'); 

	//GET A SPECIFIC CATEGORY
	$app->get('category/{id}', 'BookingsController@showCategory'); 

	//ADD A NEW CATEGORY
	$app->post('category/create', 'BookingsController@storeCategory'); 

	//ADD A NEW BOOKING
	$app->post('category/{id}/booking/create', 'BookingsController@storeBooking'); 
});
/*
function routeRedirect($name)
{
	$url = route('$name'); 

	return redirect()->route($name); 
}
*/
/*$app->group(['middleware' => 'auth'], function () use ($app) {
	$app->get('/user', function () {
		//use the middleware here
	}); 

	$app->get('user/profile', function () {
		//still use middleware here
	}); 
}); 

//namespaces

$app->group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function () use ($app)
{
	//controllers within the App\Http\Controllers\Admin Namespace

	$app->get('/', function () use ($app) {
	    return $app->version();
	});

	//why does this work? 
	$app->get('user', function () use ($app){
		return response()->json("hey there, Admin here"); 
	}); 
});

$app->group(['prefix' => 'user', 'namespace' => 'App\Http\Controllers\Admin\User'], function () use ($app)
{
	//controllers within the ..\Admin\User namespace
	//why does this not work? 
	$app->get('profile', [
		'as' => 'profile', 'uses' => 'UserController@showProfile'
	]); 
});
*/


$app->get('/', function () use ($app)
{
	return $app->version();  
});
<?php

$api = app('Dingo\Api\Routing\Router'); 

/*$api->version('V1', ['middleware' => 'api.auth'], function ($api) {
	//Protected routes
}); 
*/
/*$api->group([
	'version' => 'v1',
	'namespace' => 'App\Api\V1\Controllers',
], function ($api) {
	$api->get('collections/{collection}', 'CollectionsController@show');
	$api->get('Collections/{collection}/{id}', 'CollectionsController@showCollection');
}); */

$api->group([
	'version' => 'v1', 
	'namespace' => 'App\Http\Controllers', 
], function ($api) {
	$api->post('/auth/login', 'AuthController@postLogin');
	$api->get('/', 'UserController@index');
});

<?php

/*$router->get('/', function () use ($router) {
    return $router->app->version();
});*/


$router->get('/kode/{code}', 'VoucherController@get');
$router->get('/tes', 'VoucherController@tes');

/*$router->get('/', function () use ($app){
	$res['success'] = true;
	$res['result'] = "Hello there welcome to web api using lumen tutorial!";

	return response($res);
});*/

$router->post('/login', 'LoginController@index');
$router->post('/register', 'UserController@register');
$router->get('/user/{id}', ['middleware'=>'auth','uses'=>'UserController@get_user']);


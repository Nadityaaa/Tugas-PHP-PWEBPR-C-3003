<?php

$routes = [];

// Rute dengan parameter
$routes['GET']['/'] = 'UserController@viewsignin';
$routes['GET']['/dashboard'] = 'PlayBoxController@index';
$routes['GET']['/player'] = 'PlayBoxController@player';
$routes['GET']['/create'] = 'PlayBoxController@formcreate';
$routes['GET']['/update/{id}'] = 'PlayBoxController@formupdate';
$routes['GET']['/dokumentasi'] = 'ImageController@formcreate';
$routes['GET']['/delete/{id}'] = 'PlayBoxController@delete';
$routes['POST']['/create'] = 'PlayBoxController@create';
$routes['POST']['/update/{id}'] = 'PlayBoxController@update';
$routes['POST']['/dokumentasi'] = 'ImageController@create';
$routes['GET']['/signin'] = 'UserController@viewsignin';
$routes['GET']['/signup'] = 'UserController@viewsignup';
$routes['POST']['/signin'] = 'UserController@signin';
$routes['POST']['/signup'] = 'UserController@signup';
$routes['GET']['/logout'] = 'UserController@logout';

?>

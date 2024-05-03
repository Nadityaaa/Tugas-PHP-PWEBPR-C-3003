<?php
// $url = $_SERVER['REQUEST_URI'];
// $path = basename(parse_url($url, PHP_URL_PATH));

$routes = [];

// Rute dengan parameter
$routes['GET']['/'] = 'PlayBoxController@index';
// $routes('/player', 'get', 'PlayBoxController::index');
$routes['GET']['/player'] = 'PlayBoxController@player';
// $routes['GET']['/dashboard'] = 'PlayBoxController@index';
$routes['GET']['/create'] = 'PlayBoxController@formcreate';
$routes['GET']['/update/{id}'] = 'PlayBoxController@formupdate';
$routes['GET']['/dokumentasi'] = 'ImageController@formcreate';
// $routes['GET']['/detailporto/{id}'] = 'PlayBoxController@detail';
$routes['POST']['/create'] = 'PlayBoxController@create';
$routes['POST']['/update/{id}'] = 'PlayBoxController@update';
$routes['POST']['/dokumentasi'] = 'ImageController@create';
$routes['GET']['/delete/{id}'] = 'PlayBoxController@delete';

// $routes = [];

// $routes['/dashboard'] = 'PlayBoxController@index'
// $routes['/player'] = 'PlayBoxController@create'

// include_once 'helper/static.php';
// include_once 'function/function.php';
// include_once 'controllers/main.php';
// include_once 'function/main.php';

// $url = implode("/", 
//             array_filter(
//                 explode("/", 
//                     str_replace($_ENV['BASEDIR'], "", 
//                         parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
//                     )
//                 ), 'strlen'
//             )
//         );

// # GET
// route('/', 'get', function () { return view('Dashboard/dashboard'); });

// route('login', 'get', 'UserController::create');
// route('register', 'get', 'UserController::register');

// route('dashboard', 'get', 'DashboardController::index');
// route('dashboard/admin', 'get', 'DashboardController::admin');
// route('dashboard/contacts', 'get', 'DashboardController::contacts');
// route('dashboard/logout', 'get', 'AuthController::logout');

// route('contacts/add', 'get', 'ContactController::add');
// route('contacts/edit', 'get', 'ContactController::edit');
// route('contacts/remove', 'get', 'ContactController::remove');

// route('freshdb', 'get', 'freshdb');

// # POST
// route('login', 'post', 'AuthController::saveLogin');
// route('register', 'post', 'AuthController::saveRegister');

// route('contacts/add', 'post', 'ContactController::saveAdd');
// route('contacts/edit', 'post', 'ContactController::saveEdit');

// if (!in_array($url, $urls['routes'])) {
//     header('Location: '.BASEURL);
// }

// $call = $urls[$_SERVER['REQUEST_METHOD']][$url];
// $call();
?>

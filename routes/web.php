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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/', 'LocationController@shows');
$app->post('/', 'LocationController@shows');
$app->get('/table', 'LocationController@tableLocation');

$app->get('/createdis/{id}', 'LocationController@createDistances');
$app->post('/createdis/{id}', 'LocationController@createDistances');


$app->get('/del/{id}', 'LocationController@delLocation');
$app->get('/deldistance/{id}', 'LocationController@delDistance');

//Ployd
$app->get('floyd', 'FloydController@index');
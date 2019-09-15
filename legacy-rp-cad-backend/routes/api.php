<?php

use CloudCreativity\LaravelJsonApi\Facades\JsonApi;
use CloudCreativity\LaravelJsonApi\Routing\RouteRegistrar;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// https://laravel-json-api.readthedocs.io/en/latest/basics/routing/
// https://laravel.com/docs/5.8/api-authentication#protecting-routes

// Register the default JSON-API. Also protect the routes.
JsonApi::register('default')->middleware('auth:api')->routes(function (RouteRegistrar $api) {
    $api->resource('users');
    $api->resource('characters');
});

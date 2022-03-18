<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//definindo as rotas
Route::get("people/", "App\Http\Controllers\PeoplesController@listAll");// chamando a classe e a função na rota  /api/tasks
Route::get("people/{people}", "App\Http\Controllers\PeoplesController@listPeople");// busca pelo ID. passar o model entre chaves{}
Route::post("people/", "App\Http\Controllers\PeoplesController@savePeople");
Route::patch("people/{people}", "App\Http\Controllers\PeoplesController@updatePeople");
Route::delete("people/{people}", "App\Http\Controllers\PeoplesController@deletePeople");

<?php

use App\Models\Order;
use App\Models\Person;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('people', function () {
    return Person::all();
});

Route::get('person/{id}', function ($id) {
    return Person::findOrFail($id);
});

Route::get('orders', function () {
    return Order::all();
});

Route::get('order/{id}', function ($id) {
    return Order::findOrFail($id);
});

<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/users', function (Request $request) {
//     return $request->user();
// });
Route::prefix('/user')->group(function () {
    Route::post('/login', 'LoginController@login');
});

Route::middleware(['auth:api'])->group(function () {
    Route::namespace('Admin')->prefix('admin')->group(function () {
        Route::get('/self', 'UsersController@me');

        Route::prefix('users')->group(function () {
            Route::get('/', 'UsersController@listAllWithPagination');
            Route::post('create', 'UsersController@createUser');
        });

        Route::prefix('roles')->group(function () {
            Route::get('/', 'RolesController@getRoles');
        });
    });
});

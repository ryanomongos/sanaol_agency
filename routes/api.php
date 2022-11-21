<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HeroBannerController;
use App\Http\Controllers\BannerImageController;


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

// do "php artisan route:list" to view current routes

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function() {
    //Auth
    Route::get('auth/logout', [AuthController::class, 'logout']);;

    //Users
    Route::post('users/create', [UserController::class, 'store'])->name('user.create');
    Route::patch('users/{id}', [UserController::class, 'update'])->name('user.updateUser');
    Route::patch('users/delete/{id}', [UserController::class, 'destroy'])->name('user.deleteUser');

    //Services
    Route::patch('/services/{id}', 'ServiceController@update');
    Route::post('/services/create', 'ServiceController@store');
    Route::patch('/services/delete/{id}', 'ServiceController@destroy');

    //HeroBanner
    Route::post('herobanner', [HeroBannerController::class, 'store']);
    Route::patch('herobanner/{id}', [HeroBannerController::class, 'update']);
    Route::patch('herobanner/delete/{id}', [HeroBannerController::class, 'destroy']);

    //HeroBanner Images
    Route::post('herobanner/image', [BannerImageController::class, 'store']);
    Route::patch('herobanner/image/{id}', [BannerImageController::class, 'update']);
    Route::patch('herobanner/image/delete/{id}', [BannerImageController::class, 'destroy']);
});

//Public Routes
//Auth
Route::post('auth/register', [AuthController::class, 'register']);
Route::post('auth/login', [AuthController::class, 'login']);

//Users
Route::get('users', [UserController::class, 'index'])->name('user.index');
Route::get('users/{id}', [UserController::class, 'show'])->name('user.getUser');

//Services
Route::get('/services', 'ServiceController@index');
Route::get('/services/{id}', 'ServiceController@show');

//HeroBanner
Route::get('herobanner', [HeroBannerController::class, 'index']);
Route::get('herobanner/{id}', [HeroBannerController::class, 'show']);

//HeroBanner Images
Route::get('herobanner/image/{id}', [BannerImageController::class, 'show']);

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use App\http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page', [PagesController::class, 'index']);

Route::get('/fruit', function () {
    return view('fruit', ['name' => 'andy']);
});

Route::get('/student', function () {
    return view('student', ['name' => 'andy']);
});
Route::get('/student/{id}', function ($id) {
    return 'this is user' . $id;
});

Route::get('/login', function () {
    return view('hello', ['name' => 'login']);
});

class Service
{
    //
}

Route::get('/x', function (Service $service) {
    die(get_class($service));
});

Route::get('/cache', function () {
    return Cache::get('key');
});

Route::resource('posts', 'App\Http\Controllers\PostsController');
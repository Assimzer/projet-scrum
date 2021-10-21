<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Ressources\BulletinController;
use App\Http\Controllers\Ressources\OffreController;
use App\Http\Middleware\bulletinMiddleware;
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
    return redirect('/login');
});
Auth::routes();
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard/settings', [HomeController::class, 'settings'])->name('settings');
Route::get('/dashboard/bulletin/{id}', [BulletinController::class, 'show'])->name('showbulletin');

Route::resource('/dashboard/bulletin', BulletinController::class);
Route::resource('/dashboard/offre', OffreController::class);
Route::get('/bulletin/{id}', [BulletinController::class, 'show'])->middleware(BulletinMiddleware::class);
Route::get('/Admin/bulletin',[BulletinController::class, 'IndexAdmin'])->name('showbulletinAdmin');



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Ressources\BulletinController;
use App\Http\Controllers\Ressources\OffreController;
use App\Http\Controllers\Ressources\MatiereController;
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
Route::get('/dashboard/Offres', [HomeController::class, 'OffrePage'])->name('OffrePage');
Route::get('/dashboard/Profile', [HomeController::class, 'ProfilePage'])->name('ProfilePage');

Route::get('/dashboard/bulletin/{uuid}', [BulletinController::class, 'show'])->name('showbulletin');
Route::resource('/dashboard/bulletin', BulletinController::class);
Route::resource('/dashboard/offre', OffreController::class);





/*
|--------------------------------------------------------------------------
| ADMIN  Routes AXEL ASSIM PAS LE DROIT D'Y TOUCHER
|--------------------------------------------------------------------------
| MERCIIIIIIIIIIIIIIIIIIIIIIIIIIII !!!!!!!!!!!!!!!!!!!!!!!!!!!!!
*/

Route::get('/Admin/Dashboard',[AdminController::class, 'GetDashboardAdmin'])->name('GetDashAdmin');
//Route::get('/Admin/Dashboard/matieres',[AdminController::class, 'ShowAllMatieres'])->name('ShowAllMatieres');
Route::get('/Admin/bulletin',[BulletinController::class, 'IndexAdmin'])->name('showbulletinAdmin');

Route:  :get('/dashboard/Offres/pdf/{id}',[OffreController::class, 'createPDF'])->name('createPDF');



Route::resource('/Admin/dashboard/Matiere', MatiereController::class);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfessionnelController;
use App\Http\Controllers\Ressources\BulletinController;
use App\Http\Controllers\Ressources\OffreController;
use App\Http\Controllers\Ressources\PeriodeController;
use App\Http\Controllers\Ressources\MatiereController;
use App\Http\Controllers\Ressources\EleveController;
use App\Http\Controllers\Ressources\TuteurController;
use App\Http\Controllers\Ressources\NoteController;
use App\Http\Controllers\Ressources\NotificationController;
use App\Http\Controllers\Ressources\SousMatiereController;
use App\Http\Controllers\Ressources\FicheController;
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

Route::get('/', function () {return redirect('/login');});
Auth::routes();
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard/Offres', [HomeController::class, 'OffrePage'])->name('OffrePage');
Route::get('/dashboard/Offres/detail/{offre_uuid}', [HomeController::class, 'ShowOffre'])->name('ShowOffre');
Route::get('/dashboard/Profile', [HomeController::class, 'ProfilePage'])->name('ProfilePage');
Route::get('/dashboard/bulletin/{uuid}', [HomeController::class, 'ShowBulletinByUUID'])->name('showbulletin');

Route::get('/dashboard/Professionnel',[ProfessionnelController::class, 'GetDashboardProfessionnel'])->name('GetDashboardProfessionnel');
Route::get('/dashboard/Professionnel/offres',[ProfessionnelController::class, 'GetOffrePostedBy'])->name('GetOffrePostedBy');
Route::get('/dashboard/Professionnel/Apprentis/{apprentisID}',[ProfessionnelController::class, 'GetApprentisInformation'])->name('GetApprentisInformation');


/*
|--------------------------------------------------------------------------
| ADMIN  Routes AXEL ASSIM PAS LE DROIT D'Y TOUCHER
|--------------------------------------------------------------------------
| MERCIIIIIIIIIIIIIIIIIIIIIIIIIIII !!!!!!!!!!!!!!!!!!!!!!!!!!!!!
*/

Route::get('/Admin/Dashboard',[AdminController::class, 'GetDashboardAdmin'])->name('GetDashAdmin');
Route::get('/Admin/bulletin',[BulletinController::class, 'IndexAdmin'])->name('showbulletinAdmin');
Route::get('/dashboard/Offres/pdf/{id}',[OffreController::class, 'createPDF'])->name('createPDF');
Route::get('/Admin/dashboard/fiche/pdf/{id}', [FicheController::class, 'createEntretienPDF'])->name('ficheByID');
Route::get('/Admin/dashboard/tuteur/createTuteur',[TuteurController::class, 'createTuteur'])->name('CreateTuteur');
Route::post('/Admin/dashboard/tuteur/storeCreateTuteur',[TuteurController::class, 'createTuteur'])->name('StoreCreateTuteur');

Route::resource('/Admin/dashboard/matiere', MatiereController::class);
Route::resource('/Admin/dashboard/sousMatiere', SousMatiereController::class);
Route::resource('/Admin/dashboard/bulletin', BulletinController::class);
Route::resource('/Admin/dashboard/offre', OffreController::class);
Route::resource('/Admin/dashboard/periode', PeriodeController::class);
Route::resource('/Admin/dashboard/eleve', EleveController::class);
Route::resource('/Admin/dashboard/tuteur', TuteurController::class);
Route::resource('/Admin/dashboard/note', NoteController::class);
Route::resource('/Admin/dashboard/notifications', NotificationController::class);
Route::resource('/Admin/dashboard/fiche', FicheController::class);


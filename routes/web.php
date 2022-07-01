<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\DropzoneController;

// use App\Http\Controllers\EventController;
// use App\Http\Controllers\FactureController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('user', UserController::class);
Route::get('dropzone', [DropzoneController::class, 'dropzone']);
Route::post('dropzone/store', [DropzoneController::class, 'dropzoneStore'])->name('dropzone.store');
Route::post('dropfactures/store', [DropzoneController::class, 'dropfacturesStore'])->name('dropfactures.store');
Route::post('dropevent/store', [DropzoneController::class, 'dropeventStore'])->name('dropevent.store');

Route::resource('event', EventController::class);
Route::resource('devis', DevisController::class);
// Route::resource('factures', FactureController::class);

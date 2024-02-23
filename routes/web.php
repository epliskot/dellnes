<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormValidationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/bilder', function () {
    return view('bilder');
})->middleware(['auth', 'verified'])->name('bilder');

//Route::get('/slektstre', function () {
//    return view('slektstre');
//})->middleware(['auth', 'verified'])->name('slektstre');

Route::get('/slektstre', function () {
    $persons = DB::table('person')->select('id','fornavn')->get();
    return view('slektstre', compact('persons'));
})->middleware(['auth', 'verified'])->name('slektstre');

Route::get('/notat', function () {
    return view('notat');
})->middleware(['auth', 'verified'])->name('notat');

Route::get('/notat', [FormValidationController::class, 'createNotatForm']);
Route::post('/notat', [FormValidationController::class, 'NotatForm'])->name('validate.notat');



require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormValidationController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ImageUploadController;
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
    $images = DB::table('table_image')->select('id','name','file_path')->get();
    return view('bilder', compact('images'));
})->middleware(['auth', 'verified'])->name('bilder');

Route::get('/slektstre', function () {
    $persons = DB::table('people')->select('id','etternavn')->get();
    return view('slektstre', compact('persons'));
})->middleware(['auth', 'verified'])->name('slektstre');

Route::get('/seNotater', function () {
    $notatss = DB::table('notats')->select('id','person','notat','created_by', 'created_at')->get()->sortDesc();
    return view('seNotater', compact('notatss'));
})->middleware(['auth', 'verified'])->name('seNotater');

Route::get('/logg', function () {
    $logg = DB::table('logg')->select('id','oppdatering_av','oppdatering_hva')->get()->sortDesc();
    return view('logg', compact('logg'));
})->middleware(['auth', 'verified'])->name('logg');

Route::get('/notats', function () {
    return view('notats');
})->middleware(['auth', 'verified'])->name('notats');

Route::get('/notats', [FormValidationController::class, 'createNotatForm'])->middleware(['auth', 'verified'])->name('notats');
Route::post('/notats', [FormValidationController::class, 'NotatForm'])->name('validate.notats');

Route::get('/people', function () {
    return view('people');
})->middleware(['auth', 'verified'])->name('people');

Route::get('/people', [PeopleController::class, 'createPersonForm'])->middleware(['auth', 'verified'])->name('people');
Route::post('/people', [PeopleController::class, 'PersonForm'])->name('validate.people');

Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload')->middleware(['auth', 'verified'])->name('upload-image');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');

Route::get('/sePerson', function () {
    $peoples= DB::table('people')->select('id','etternavn','fornavn','created_by','parent1','parent2','dato_fodt','dato_dod','fodested','sted_dod','barn')->get()->sortDesc();
    return view('sePerson', compact('peoples'));
})->middleware(['auth', 'verified'])->name('sePerson');

















require __DIR__.'/auth.php';

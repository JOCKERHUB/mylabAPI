<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SensorController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('sensori');
})->middleware(['auth', 'verified']);

Route::get('/home', function () {
    return view('home ');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/sensori', [SensorController::class, 'index'])->name('sensori');
    Route::get('/aggiungi-sensore', [SensorController::class, 'add'])->name('sensori.add');
    Route::post('/aggiungi-sensore', [SensorController::class,'addSensor'])->name('sensori.addSensor');
    Route::get('/sensori/{sensor}', [SensorController::class, 'show'])->name('sensori.show');
    
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('generate-token', [ProfileController::class, 'generateApiToken'])->name('profile.addToken');
});

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\devicesController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PPMController;
use App\Http\Controllers\teamController;
use App\Http\Controllers\ticketsController;
use App\Http\Controllers\tasksController;

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
    //return view('welcome');
    return view('auth.login');
});
Route::resource('/device',devicesController::class);
Route::resource('/major',MajorController::class);
Route::resource('/client',ClientController::class);
Route::resource('/ppm_details',PPMController::class);
Route::resource('/team',teamController::class);
Route::resource('/tickets',ticketsController::class);
Route::resource('/task',tasksController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/{page}', 'App\Http\Controllers\AdminController@index');

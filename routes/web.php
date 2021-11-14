<?php

use Illuminate\Support\Facades\Route;

use \App\http\Controllers\EmployeeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:admin', 'prefix' => 'adminR', 'as' => 'adminR.'], function() {
        // Route::resource('jefemeseros', JefeMeseroController::class);
        // Route::resource('informes', DynamicPDFController::class);

    });
   Route::group(['middleware' => 'role:chief', 'prefix' => 'chiefR', 'as' => 'chiefR.'], function() {
        Route::resource('employees', EmployeeController::class);
        // Route::resource('platillos', PlatilloController::class);


   });

   Route::group(['middleware' => 'role:employee', 'prefix' => 'employeeR', 'as' => 'employeeR.'], function() {
    // Route::resource('meseros', MeseroController::class);
    // Route::resource('platillos', PlatilloController::class);
    
    });
    
});

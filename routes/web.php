<?php

use Illuminate\Support\Facades\Route;

use \App\http\Controllers\EmployeeController;
use \App\http\Controllers\ChiefController;
use \App\http\Controllers\ProjectController;
use \App\http\Controllers\ReportController;
use \App\http\Controllers\AsignedProjectController;
use \App\http\Controllers\ManageStaffController;
use \App\http\Controllers\NotificationController;

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
        Route::resource('chiefs', ChiefController::class);
        // Route::resource('informes', DynamicPDFController::class);

    });
   Route::group(['middleware' => 'role:chief', 'prefix' => 'chiefR', 'as' => 'chiefR.'], function() {
        
        Route::get('employees/{employee_id}/assign', 'App\Http\Controllers\EmployeeController@assign')->name('employees.assign');
        Route::resource('employees', EmployeeController::class);
        Route::resource('projects', ProjectController::class);
        Route::resource('reports', ReportController::class);
        Route::resource('staff', ManageStaffController::class);


   });

   Route::group(['middleware' => 'role:employee', 'prefix' => 'employeeR', 'as' => 'employeeR.'], function() {
    Route::resource('AsignedP', AsignedProjectController::class);
    // Route::resource('platillos', PlatilloController::class);
    
    });
    
    Route::resource('notifications', NotificationController::class);
});

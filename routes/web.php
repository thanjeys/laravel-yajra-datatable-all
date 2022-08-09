<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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




Route::get('basic-table', [StudentController::class, 'basicTable']);
Route::get('basic-datatable',[StudentController::class, 'basicDataTable']);

Route::view('ajax-datatable', 'students');
Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');

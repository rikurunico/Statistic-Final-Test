<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ExportImportController;


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


//Create Group Route
Route::group(['middleware' => ['auth']], function () {
    Route::resource('/student', StudentController::class);
    Route::get('/export', [ExportImportController::class, 'cetak_pdf'])->name('exportPDF');
    Route::get('/export_excel', [ExportImportController::class, 'export_excel'])->name('exportExcel');
    Route::Post('/import_excel', [ExportImportController::class, 'import_excel'])->name('importExcel');
    Route::get('/', function () {
        return view('welcome');
    });
});

require __DIR__ . '/auth.php';

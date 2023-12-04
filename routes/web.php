<?php
use App\Http\Controllers\ReprsentativeController;
use App\Http\Controllers\ChequeController;
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
Route::get('/sys', function () {
    return view('welcome');
});
Route::get('/sys/add-reprsentative', function () {
    return view('add_reprsentative');
})->name('add.reprsentative');
Route::post('/sys/add-reprsentative', [ReprsentativeController::class, "put"])->name('reprsentative.put');
Route::get('/sys/reprsentatives', [ReprsentativeController::class, "index"])->name('reprsentative.prev');
Route::get('/sys/reprsentative/{id}', [ReprsentativeController::class, "prev"])->name('reprsentative.show');
Route::get('/sys/edit-reprsentative/{id}', [ReprsentativeController::class, "edit"])->name('reprsentative.edit');
Route::post('/sys/update-reprsentative', [ReprsentativeController::class, "update"])->name('reprsentative.update');
Route::post('/sys/get-reprsentative', [ReprsentativeController::class, "getReprsentatives"])->name('reprsentatives.get');
Route::post('/sys/search-reprsentative', [ReprsentativeController::class, "search"])->name('reprsentatives.search');
Route::post('/sys/delete-reprsentative', [ReprsentativeController::class, "delete"])->name('reprsentatives.delete');

Route::get('/sys/add-cheque/{id}', [ChequeController::class, "add"])->name('cheque.add');
Route::post('/sys/add-cheque', [ChequeController::class, "put"])->name('cheque.put');
Route::get('/sys/Cheque/{id}', [ChequeController::class, "prev"])->name('cheque.prev');
Route::post('/sys/delete-cheque', [ChequeController::class, "delete"])->name('cheque.delete');

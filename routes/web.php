<?php
use App\Http\Controllers\ReprsentativeController;
use App\Http\Controllers\CheckController;
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
Route::get('/add-reprsentative', function () {
    return view('add_reprsentative');
})->name('add.reprsentative');
Route::post('/add-reprsentative', [ReprsentativeController::class, "put"])->name('reprsentative.put');
Route::get('/reprsentatives', [ReprsentativeController::class, "index"])->name('reprsentative.prev');
Route::get('/edit-reprsentative/{id}', [ReprsentativeController::class, "edit"])->name('reprsentative.edit');
Route::post('/update-reprsentative', [ReprsentativeController::class, "update"])->name('reprsentative.update');
Route::post('/get-reprsentative', [ReprsentativeController::class, "getReprsentatives"])->name('reprsentatives.get');
Route::post('/search-reprsentative', [ReprsentativeController::class, "search"])->name('reprsentatives.search');
Route::post('/delete-reprsentative', [ReprsentativeController::class, "delete"])->name('reprsentatives.delete');

Route::get('/add-cheque/{id}', [CheckController::class, "add"])->name('cheque.add');
Route::post('/add-cheque', [CheckController::class, "put"])->name('cheque.put');

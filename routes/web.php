<?php
use App\Http\Controllers\ReprsentativeController;
use App\Http\Controllers\ChequeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RegisterController;

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

Route::middleware(['admin_guest'])->group(function () {
    Route::get('/login', [RegisterController::class, 'getLoginIndex']);
    Route::post('/admin/login', [RegisterController::class, 'login'])->name('admin.login');
});

Route::middleware(['auth:admin', 'admin'])->group(function () {
    Route::get('/add-reprsentative', function () {
        return view('add_reprsentative');
    })->name('add.reprsentative');
    Route::post('/add-reprsentative', [ReprsentativeController::class, "put"])->name('reprsentative.put');
    Route::get('/', [ReprsentativeController::class, "index"])->name('reprsentative.prev');
    Route::get('/reprsentative/{id}', [ReprsentativeController::class, "prev"])->name('reprsentative.show');
    Route::get('/edit-reprsentative/{id}', [ReprsentativeController::class, "edit"])->name('reprsentative.edit');
    Route::post('/update-reprsentative', [ReprsentativeController::class, "update"])->name('reprsentative.update');
    Route::post('/get-reprsentative', [ReprsentativeController::class, "getReprsentatives"])->name('reprsentatives.get');
    Route::post('/search-reprsentative', [ReprsentativeController::class, "search"])->name('reprsentatives.search');
    Route::post('/delete-reprsentative', [ReprsentativeController::class, "delete"])->name('reprsentatives.delete');

    Route::get('/add-cheque/{id}', [ChequeController::class, "add"])->name('cheque.add');
    Route::post('/add-cheque', [ChequeController::class, "put"])->name('cheque.put');
    Route::get('/Cheque/{id}', [ChequeController::class, "prev"])->name('cheque.prev');
    Route::post('/delete-cheque', [ChequeController::class, "delete"])->name('cheque.delete');
});
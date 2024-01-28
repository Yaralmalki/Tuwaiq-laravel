<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

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
})->name('welcome');
Route::get('/cpanel', function () {
    return view('dashboard.controlpanel');
})->name('dashboard');
Route::get('/', [ItemController::class, 'showitemgroup'])->name('welcome');
Route::get('/addtocart/{id}', [ItemController::class, 'Addtocart'])->name('addtocart');
Route::get('/checkout}', [ItemController::class, 'Checkout'])->name('checkout')->middleware('auth');
#مجموعات
route::get('/showproduct/{id}', [ItemController::class, 'Showproduct'])->name('showproduct');
Route::post('/save', [ItemController::class, 'SaveGroupItem'])->name('save');
route::get('/del/{x}', [ItemController::class, "del"])->name('del');
route::get('/edit/{x}', [ItemController::class, 'Edit'])->name('edit');
Route::post('/update', [ItemController::class, 'update'])->name('update');
#\\ الاصناف
Route::get('/item',[ItemController::class,'GetItems'])->name('item');
Route::post('/SaveItems', [ItemController::class, 'SaveItems'])->name('SaveItems');
route::get('/delt/{x}', [ItemController::class, "delt"])->name('delt');
route::get('/edt/{x}', [ItemController::class, 'Edt'])->name('edt');
Route::post('/updat', [ItemController::class, 'updat'])->name('updat');

route::get('/cpanel', [DashboardController::class, 'DisplayItems'])->name('controlpanel');
route::get('/addgritem', [DashboardController::class, 'DisplayaddItemsgroup'])->name('addgritem');
route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

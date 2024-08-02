<?php

use App\Http\Controllers\BudgetLimitController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Auth::routes();
Route::get('/', function () {
	return view('welcome');
});

Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');



Route::middleware(['auth', 'role:admin'])->group(function () {
	Route::get('admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin-dashboard');


	//Manage record
	Route::get('admin/record', [RecordController::class, 'index'])->name('admin-record');
	Route::get('admin/record/create', [RecordController::class, 'create'])->name('admin-record-create');
	Route::post('admin/record/store', [RecordController::class, 'store'])->name('admin-record-store');
	Route::get('admin/record/edit/{id}', [RecordController::class, 'edit'])->name('admin-record-edit');
	Route::post('admin/record/edit/update/{id}', [RecordController::class, 'update'])->name('admin-record-update');
	Route::get('admin/record/delete/{id}', [RecordController::class, 'destroy'])->name('admin-record-delete');

	//Manage budget limit
	Route::get('admin/budget_limit', [BudgetLimitController::class, 'index'])->name('admin-budget_limit');
	Route::get('admin/budget_limit/create', [BudgetLimitController::class, 'create'])->name('admin-budget_limit-create');
	Route::post('admin/budget_limit/store', [BudgetLimitController::class, 'store'])->name('admin-budget_limit-store');
	Route::get('admin/budget_limit/edit/{id}', [BudgetLimitController::class, 'edit'])->name('admin-budget_limit-edit');
	Route::post('admin/budget_limit/edit/update/{id}', [BudgetLimitController::class, 'update'])->name('admin-budget_limit-update');
	Route::get('admin/budget_limit/delete/{id}', [BudgetLimitController::class, 'destroy'])->name('admin-budget_limit-delete');

	//Manage category
	Route::get('admin/category', [CategoryController::class, 'index'])->name('admin-category');
	Route::get('admin/category/create', [CategoryController::class, 'create'])->name('admin-category-create');
	Route::post('admin/category/store', [CategoryController::class, 'store'])->name('admin-category-store');
	Route::get('admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin-category-edit');
	Route::post('admin/category/edit/update/{id}', [CategoryController::class, 'update'])->name('admin-category-update');
	Route::get('admin/category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin-category-delete');

});

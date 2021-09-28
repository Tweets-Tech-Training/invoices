<?php

use App\Http\Controllers\ShowController;
use App\Http\Livewire\Profile;
use App\Http\Livewire\User;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\City;
use App\Http\Livewire\Coin;
use App\Http\Livewire\Category;
use App\Http\Livewire\Customer;
use App\Http\Livewire\CustomerFormLivewire;
use App\Http\Livewire\Bill;
use App\Http\Livewire\BillForm;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Userform;
use App\Http\Livewire\ExpensesCategory;
use App\Http\Livewire\ExpensesBill;
use App\Http\Livewire\ExpensesBillForm;
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


Route::group(['middleware' => ['auth']], function () {
    Route::get('/Maindashboard', Dashboard::class)->name('Maindashboard');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/expensesCategory', ExpensesCategory::class)->name('expensesCategory');
    Route::get('/billExpenses', ExpensesBill::class)->name('billExpenses');
    Route::get('/billExpenses/create', ExpensesBillForm::class)->name('billExpenses.create');
    Route::get('/billExpenses/{id}/edit', ExpensesBillForm::class)->name('billExpenses.edit');
    Route::get('/user', User::class)->name('user');
    Route::get('/user/{id}/edit', UserForm::class)->name('user.edit');
    Route::get('/user/create', UserForm::class)->name('user.create');

    Route::get('/city', City::class)->name('city');
    Route::get('/coin', Coin::class)->name('coin');
    Route::get('/category', Category::class)->name('category');
    Route::get('/customer', Customer::class)->name('customer');
    Route::get('/customer/create', CustomerFormLivewire::class)->name('customer.create');
    Route::get('/customer/{id}/edit', CustomerFormLivewire::class)->name('customer.edit');
    Route::get('/bill', Bill::class)->name('bill');
    Route::get('/search', Bill::class)->name('search');
    Route::get('/bill/create', BillForm::class)->name('bill.create');
    Route::get('/bill/{id}/edit', BillForm::class)->name('bill.edit');
    Route::get('/bill/{id}/show', [ShowController::class, 'show'])->name('bill.show');
    //Route::get('/bill/show', [\App\Http\Controllers\ShowController::class] )->name('bill.show');


});



Route::get('/main', function () {
    return view('dashboard_layout.main');
})->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

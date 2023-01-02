<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\PizzasController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

//User Events
Route::get('/create_user', [UsersController::class, "create_user"])->name('create_user');
Route::post('/store_user', [UsersController::class, "store_user"])->name('store_user');

//Pizza Events
Route::post('/store_pizza', [PizzasController::class, "store_pizza"])->name('store_pizza');
Route::put('/update_pizza/{id}', [PizzasController::class, "update_pizza"])->name('update_pizza');
Route::delete('/destroy_pizza/{id}', [PizzasController::class, "destroy_pizza"])->name('destroy_pizza');

//Shop Events
Route::post('/add_item', [ShopController::class, "add_item"])->name('add_item');

//Auth Events
Route::get('/login', [UsersController::class, "login"])->name('login');
Route::get('/logoff', [UsersController::class, "logoff"])->name('logoff');
Route::post('/auth', [UsersController::class, "auth"])->name('auth');
Route::get('/forget_password', [UsersController::class, 'forget_password'])->name('forget_password');
Route::post('/send_mail', [UsersController::class, 'send_mail'])->name('send_mail');
Route::get('/recover_password/{token}', [UsersController::class, 'recover_password'])->name('recover_password');
Route::post('/new_password', [UsersController::class, 'new_password'])->name('new_password');

//Pages
Route::get('/', [PizzasController::class, "index"])->name('index');
Route::get('/panel', [UsersController::class, "panel"])->name('panel')->middleware('admin');
?>
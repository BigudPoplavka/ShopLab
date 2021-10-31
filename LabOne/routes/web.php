<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('products');
});

Route::view("/guarantee", "guarantee")->name("guarantee");
Route::view("/contacts", "contacts")->name("contacts");
Route::view("/delivery", "delivery")->name("delivery");
//Route::view("/products", "products")->name("products");

Route::get('/products', [App\Http\Controllers\CategoriesController::class, 'SetDefault'])->name('products');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'as' => 'auth.', 
    'prefix' => 'auth', 
], function () {
    // форма регистрации
    Route::get('register',[App\Http\Controllers\Auth\RegisterController::class, 'register'])
        ->name('register');
    // создание пользователя
    Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])
        ->name('create');
    // форма входа
    Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'login'])
        ->name('login');
    // аутентификация
    Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate'])
        ->name('auth');
    // выход
    Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])
        ->name('logout');
    // форма ввода адреса почты
    Route::get('forgot-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'form'])
    ->name('forgot-form');
    // письмо на почту
    Route::post('forgot-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'mail'])
    ->name('forgot-mail');
    // форма восстановления пароля
    Route::get(
        'reset-password/token/{token}/email/{email}',
        [App\Http\Controllers\Auth\ResetPasswordController::class, 'form']
    )->name('reset-form');
    // восстановление пароля
    Route::post('reset-password', [Auth\ResetPasswordController::class, 'reset'])
        ->name('reset-password');
    // сообщение о необходимости проверки адреса почты
    Route::get('verify-message', [App\Http\Controllers\Auth\VerifyEmailController::class, 'message'])
    ->name('verify-message');
    // подтверждение адреса почты нового пользователя
    Route::get('verify/token/{token}/id/{id}', [App\Http\Controllers\Auth\VerifyEmailController::class, 'verify'])
        ->where('token', '[a-f0-9]{32}')
        ->where('id', '[0-9]+')
        ->name('verify');
});

Route::get('category/{category}', [App\Http\Controllers\CategoriesController::class, 'SetCategory'])
    ->where('category')
    ->name('category');



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Logout;
use App\Http\Controllers\languageController;
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
    return view('index');
});


Route::get('/register', [LoginController::class, 'goToRegisterPage'])->name('register.page');
Route::post('/register', [LoginController::class, 'createUser'])->name('create.user');

Route::get('/login', [LoginController::class, 'goToLoginPage'])->name('login.page');
Route::post('/login', [LoginController::class, 'userLogin'])->name('user.login');
Route::get('/logout', [LoginController::class, 'logOut'])->name('logout');



// Routing languages
Route::middleware('checkLoggedIn')->group(function(){
Route::get('/home', [LoginController::class, 'goToHome']);
Route::get('/language/html', [languageController::class, 'lang_html'])->name('language.html');
Route::get('/language/css', [languageController::class, 'lang_css'])->name('language.css');
Route::get('/language/javascript', [languageController::class, 'lang_js'])->name('language.js');
Route::get('/language/python', [languageController::class, 'lang_python'])->name('language.python');
Route::get('/language/php', [languageController::class, 'lang_php'])->name('language.php');
Route::get('/language/laravel', [languageController::class, 'lang_laravel'])->name('language.laravel');
Route::get('/language/vizualization', [languageController::class, 'lang_vizual'])->name('language.vizual');
Route::get('/language/ml-ai', [languageController::class, 'lang_ai'])->name('language.ai');

});
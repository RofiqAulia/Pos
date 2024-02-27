<?php


namespace App\Http\Controllers;
use App\Http\Controllers\WelcomeController;
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
    return 'Selamat datang';
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return '2241720038_M. Rofiq Aulia';
});

Route::get('/user/{rofiq}', function ($name) {
    return 'Nama saya '.$name;
});
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID'.$id;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/profile', function () {
    //
    })->name('profile');

Route::view('/welcome', 'welcome'); 
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/',[PageController::class,'index']);
Route::get('/about',[PageController::class,'about']);
Route::get('/articles/{id}',[PageController::class,'articles']);
Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'about']);
Route::get('/articles/{id}',[ArticleController::class,'articles']);


use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([ 'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy'
]);

Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Rofiq']);
    });
Route::get('/greeting', [WelcomeController::class, 'greeting']);
<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\test\CRUDController;
use App\Http\Controllers\Test\PrimerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

//Группируем маршруты, чтобы они обрабатывались одним посредником guest
Route::group(['middleware' => 'guest'], function () {

    //Регистрация

    Route::get('/register', [UserController::class, 'create'])->name('register.create');

    Route::post('/register', [UserController::class, 'store'])->name('register.store');

//Авторизация

    Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');

    Route::post('/login', [UserController::class, 'login'])->name('login');
});

Route::get('create', [PostController::class, 'create'])->name('post.create');

Route::post('/', [PostController::class, 'store'])->name('post.store');


//Группируем маршруты, чтобы они обрабатывались одним посредником auth
Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});


//Админские маршруты
Route::group(['middleware' => 'admin', 'prefix' => 'admin'],function () {
    Route::get('/', [MainController::class, 'index'])->name('admin');
});


//Правило для страниц, для которых нет маршрутов
Route::fallback(function () {
    return redirect()->route('home');
});

//Из прошлых проектов

Route::get('/front', function () {
    return view('app.front' , ['name' => 'Aleks', 'surname' => 'Lyashenko']);
})->name('front');

Route::get('pass', function () {
    return view('pages/pass');
})->name('pass');
Route::get('portfolio', function () {
    return view('pages/portfolio');
})->name('portfolio');

//Maxmoll

Route::get('/maxmoll', [OrderController::class, 'index'])->name('maxmoll.home');
Route::get('/maxmoll/create', [OrderController::class, 'create'])->name('maxmoll.create');
Route::post('/maxmoll', [OrderController::class, 'store'])->name('maxmoll.store');

//mail
//Route::get('send', [ContactController::class, 'send'])->name('maxmoll.send');
Route::match(['get', 'post'], 'send', [ContactController::class, 'send'])->name('maxmoll.send');

//Route::get('login', function () {
//    return view('pages/login');
//});
//Route::post('login', function () {
//    if (!empty($_POST)) {
//        echo $name = $_POST['name'];
//        echo $email = $_POST['email'];
//    }
//    return 'Метод разрешен';
//})->name('login');


//Тест
//Route::get('/test/{id}', function ($id) {
//    return $id;
//});
//
//Route::match(['get', 'post', 'put'], 'form', function () {
//    return view('test/form');
//});

//Route::get('pages/{slug}', [PageController::class, 'show']);
//
//Route::get('show', [ShowController::class, 'index']);
//
//Route::resource('posts', PostController::class);


//Маршрут для контроллера ресурсов, 3 аргументом передаем массив, чтобы параметр попадал под регулярку из
// RouteServiceProvider $id
//Route::resource('admin/tasks', CRUDController::class, ['parameters' => ['tasks' => 'id']]);

//Путь с динамической частью
//Route::get('primer/{slug?}', [PrimerController::class, 'primer']);


//РОУТИНГ БЕЗ ИСПОЛЬЗОВАНИЯ КОНТРОЛЛЕРОВ

//Маршрут с динамическими параметрами и регулярными выражениями (чтобы в id попадали только цифры, а в slug - буквы,
// цифры и дефис) - регулярки прописаны в файле
//Route::get('post/{id}/{slug?}', function ($id, $slug = null) {
//    return "$id ==> $slug";
//});


//Группировка маршрутов

//Route::prefix('admin')->group(function () {
//    Route::get('posts', function () {
//        return 'Show posts';
//    });
//    Route::get('post/create', function () {
//        return 'Create post';
//    });
//    Route::get('post/{id}/edit', function ($id) {
//        return "Edit post $id";
//    });
//});



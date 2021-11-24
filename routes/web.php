<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\test\CRUDController;
use App\Http\Controllers\Test\PrimerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
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

Route::get('page/about', [PageController::class, 'show'])->name('page.about');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', [UserController::class, 'create'])->name('register.create');

Route::post('/register', [UserController::class, 'store'])->name('register.store');

Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');

Route::get('pages/{slug}', [PageController::class, 'show']);

Route::get('show', [ShowController::class, 'index']);

Route::resource('posts', PostController::class);


//Маршрут для контроллера ресурсов, 3 аргументом передаем массив, чтобы параметр попадал под регулярку из
// RouteServiceProvider $id
Route::resource('admin/tasks', CRUDController::class, ['parameters' => ['tasks' => 'id']]);

//Путь с динамической частью
Route::get('primer/{slug?}', [PrimerController::class, 'primer']);


//РОУТИНГ БЕЗ ИСПОЛЬЗОВАНИЯ КОНТРОЛЛЕРОВ

//Маршрут с динамическими параметрами и регулярными выражениями (чтобы в id попадали только цифры, а в slug - буквы,
// цифры и дефис) - регулярки прописаны в файле
Route::get('post/{id}/{slug?}', function ($id, $slug = null) {
    return "$id ==> $slug";
});


//Группировка маршрутов

Route::prefix('admin')->group(function () {
    Route::get('posts', function () {
        return 'Show posts';
    });
    Route::get('post/create', function () {
        return 'Create post';
    });
    Route::get('post/{id}/edit', function ($id) {
        return "Edit post $id";
    });
});

//Из прошлых проектов

Route::get('/front', function () {
    return view('front' , ['name' => 'Aleks', 'surname' => 'Lyashenko']);
})->name('front');

Route::get('pass', function () {
    return view('pages/pass');
})->name('pass');
Route::get('portfolio', function () {
    return view('pages/portfolio');
})->name('portfolio');

Route::get('login', function () {
    return view('pages/login');
});
Route::post('login', function () {
    if (!empty($_POST)) {
        echo $name = $_POST['name'];
        echo $email = $_POST['email'];
    }
    return 'Метод разрешен';
})->name('login');


//Правило для страниц, для которых нет маршрутов
Route::fallback(function () {
    return redirect()->route('home');
});


//Тест
Route::get('/test/{id}', function ($id) {
    return $id;
});

Route::match(['get', 'post', 'put'], 'form', function () {
    return view('test/form');
});

//Maxmoll

Route::get('/order', [OrderController::class, 'form'])->name('maxmoll.order');


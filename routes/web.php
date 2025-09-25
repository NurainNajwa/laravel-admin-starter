<?php

use App\Http\Controllers\TaskController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
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
});

Route::get('/posts', function () {
    $posts = Post::all();
    foreach ($posts as $post) {
        echo $post->author->name . "<br>";
    }
});

Route::get('/tasks/listing', [TaskController::class, 'listing'])->name('tasks.listing');
Route::get('/tasks/listing/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks/store', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/edit/{task}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::post('/tasks/destroy', [TaskController::class, 'destroy'])->name('tasks.destroy');
Route::get('/tasks/edit/{task}', [TaskController::class, 'edit'])->name('tasks.edit');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

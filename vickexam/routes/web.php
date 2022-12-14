<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Models\Group;
use App\Models\Post;
use App\Models\User;
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

// Index page
Route::get('/', function () {
    // Take the 3 newest posts
    $latestPosts = Post::orderBy('published_at', 'desc')->take(3)->get();
    $userCount = User::count();
    $groupCount = Group::count();

    return view('welcome', compact('latestPosts', 'groupCount', 'userCount'));
})->middleware(['auth'])->name('home');

// Group routes
Route::get('/groups', [GroupController::class, 'index'])->name('groups.index');
Route::get('/groups/{id}', [GroupController::class, 'show'])->name('groups.show');


// Resource routes of the base pages. For more info on Resource Routes
Route::resource('/posts', PostController::class);
Route::resource('/students', StudentController::class);

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

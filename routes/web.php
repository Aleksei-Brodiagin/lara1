<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Chapter;
use App\Models\Theme;

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
    return view('welcome')
        ->with('users', User::all())
        ->with('title', 'Welcome');
})
->name('welcome');

Route::get('/forum', function () {
    return view('forum')
        ->with('chapters', Chapter::all())
        ->with('title', 'Forum');
})
->name('forum');

Route::get('/themes/{theme}', function(Theme $theme) {
    return view('theme')
        ->with('title', $theme->title)
        ->with('messages', $theme->messages);
})
->name('themes');

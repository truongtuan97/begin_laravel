<?php

use Illuminate\Support\Facades\Route;
use App\Article;
use App\Tag;
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

// Route::get('/', function () {
//     $articles = Article::all();
//     $tags = Tag::all();
//     return view('welcome', ['articles' => $articles, 'tags' => $tags]);
// });

Route::resource('tasks', 'TasksController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'UserController');
Route::resource('profiles', 'ProfileController');
Route::resource('articles', 'ArticleController');
Route::resource('comments', 'CommentController');
Route::get('/users/{id}/articles', 'ArticleController@articles');
Route::get('/', 'ArticleController@main');
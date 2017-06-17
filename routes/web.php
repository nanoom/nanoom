<?php

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
use App\Article;

Route::get('/', function () {
    return view('welcome');
});

Route::get('articles', function() {
    $articles = App\Article::all();

    return view('articles.index', compact('articles'));
});
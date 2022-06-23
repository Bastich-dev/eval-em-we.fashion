<?php

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


// ------------------------------------------ PUBLIC VIEWS

// Home page
Route::get('/', function () {
    return view('home');
});

// Categories pages
Route::get('/categories/soldes', function () {
    return view('categories/soldes');
});
Route::get('/categories/homme', function () {
    return view('categories/homme');
});
Route::get('/categories/femme', function () {
    return view('categories/femme');
});


// Product page
Route::get('/product/{id}', function ($id) {
    echo $id;
    return view('product/index');
});


// 404 Page
Route::fallback(function () {
    return view('404');

});
// ------------------------------------------ ADMIN VIEWS
// Login page
Route::get('/admin', function () {
    return view('admin/index');
});

// Admin list products page
Route::get('/admin/products', function () {
    return view('admin/products');
});
// Admin list categories page
Route::get('/admin/categories', function () {
    return view('admin/categories');
});




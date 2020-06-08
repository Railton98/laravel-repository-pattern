<?php

$this->group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    $this->view('/', 'home')->name('admin');

    $this->any('products/search', 'ProductController@search')->name('products.search');
    $this->resource('products', 'ProductController');


    $this->any('categories/search', 'CategoryController@search')->name('categories.search');
    $this->resource('categories', 'CategoryController');
});

$this->get('/', function () {
    return view('welcome');
});


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

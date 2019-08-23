<?php

Route::get('/', 'HomeController@index');
Route::get('home-furniture', 'HomeController@furniture');
Route::get('home-fashion-1', 'HomeController@fashion1');
Route::get('home-fashion-2', 'HomeController@fashion2');
Route::get('home-beer', 'HomeController@beer');
Route::get('home-sushi', 'HomeController@sushi');
Route::get('home-medical', 'HomeController@medical');
Route::get('home-lingerie', 'HomeController@lingerie');
Route::get('home-electronics', 'HomeController@electronics');
Route::get('home-bakery', 'HomeController@bakery');
Route::get('home-organic', 'HomeController@organic');
Route::get('home-marketplace', 'HomeController@marketplace');










Route::get('shop-grid', 'ShopController@grid');
Route::get('shop-quick', 'ShopController@quick');
Route::get('shop-masonryalt', 'ShopController@masonryalt');
Route::get('shop-hover-info', 'ShopController@hoverInfo');
Route::get('shop-color-button', 'ShopController@standard');

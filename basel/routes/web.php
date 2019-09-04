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








Route::group(['prefix' => 'shop'], function(){
    Route::get('banner', 'ShopController@banner');
    Route::get('grid', 'ShopController@grid');
    Route::get('quick', 'ShopController@quick');
    Route::get('masonryalt', 'ShopController@masonryalt');
    Route::get('hover-info', 'ShopController@hoverInfo');
    Route::get('color-button', 'ShopController@standard');
    Route::get('color-button', 'ShopController@standard');

});




Route::group(['prefix' => 'my-account'], function(){
    Route::get('/', 'AccountController@index');
    Route::get('/orders', 'AccountController@orders');
    Route::get('/view-order/{reference}', 'AccountController@viewOrder');
    Route::get('/address', 'AccountController@address');
    Route::get('/edit-address', 'AccountController@editAddress');
    Route::get('/edit-account', 'AccountController@account');
    Route::get('/wishlist', 'AccountController@wishlist');
});

Route::get('lost-password', 'AuthController@lost');



Route::get('contact', 'PagesController@contact');
Route::get('contact-2', 'PagesController@contact2');

Route::group(['prefix' => 'elements'], function(){
    Route::get('/list-element', 'ElementsController@listElement');
});
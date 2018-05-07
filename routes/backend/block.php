<?php

/**
 * All route names are prefixed with 'admin.block'.
 */
Route::group([
  'prefix'     => 'block',
  'as'         => 'block.',
  'namespace'  => 'Block',
], function () {
    Route::group([
        'middleware' => 'role:administrator',
    ], function () {
        /*
         * Block welcome Management
         */
        Route::get('welcome', 'WelcomeController@index')->name('welcome.get');
        Route::patch('welcome', 'WelcomeController@update')->name('welcome.update');
        
        /*
         * Block Introduce Management
         */
        Route::get('introduce', 'IntroduceController@index')->name('introduce.get');
        Route::patch('introduce', 'IntroduceController@update')->name('introduce.update');

        /*
         * Block Product & Service Management
         */
        Route::get('product', 'ProductController@index')->name('product.get');
        Route::patch('product', 'ProductController@update')->name('product.update');
    });
});
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
         * User Management
         */
        Route::get('welcome', 'WelcomeController@index')->name('welcome.get');
        Route::patch('welcome', 'WelcomeController@update')->name('welcome.update');
    });
});
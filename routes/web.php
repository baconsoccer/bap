<?php
/*

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('hello' , function () {
    return 'Hello';
});

Route::get('test', function () {
    $data = array('oke', 'dan' , 'maar');
    return $data;
});

Route::get('/', 'TestController@index');

 */


Route::get('/', 'TestController@index');
Route::get('/about', 'TestController@about');
Route::get('/login', 'TestController@login');
Route::get('/register', 'TestController@register');
Route::get('/squad', 'TestController@squad');

Route::get('/test','TestController@test');

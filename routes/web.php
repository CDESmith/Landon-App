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

Route::get('/', function () {
    return '<h3>Landon App Page</h3>';
    // return view('welcome');
});


Route::get('/about', function () {
    $response_arr = [];
    $response_arr['author'] = 'CDES';
    $response_arr['version'] = '0.1.1';
    return $response_arr;
    // return '<h3>About</h3>';
});


Route::get('/home', function () {
    $data = [];
    $data['version'] = '0.1.1';
    return view('welcome', $data);
});


Route::get('/di', 'ClientController@di');


Route::get('/fascades/db', function () {
    return DB::select('SELECT * FROM tables');
});

Route::get('/fascades/encrypt', function () {
    return Crypt::encrypt('123456789');
});

Route::get('/fascades/decrypt', function () {
    return Crypt::decrypt('eyJpdiI6InlhU0RRUkZjdmpkYTRHSXJhYW1uc1E9PSIsInZhbHVlIjoiMTJmTWNGaU8rN1o1WTRIMExvd0tGUEZ0NFIyQWp2aEtXakJIempyMFNoST0iLCJtYWMiOiIwNzQ3NTQ5MGM1YjkwOTY1YmVkZjQwOWRiYmQzODc5OWU4NzRmZDk0MTU4ZTg1ODgwY2U0YmY2NTFiZjgwMjIwIn0');
});
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
	$a = strtoupper(bin2hex(openssl_random_pseudo_bytes(6)));
	$a = "tenant_".$a;
	echo($a);

    return view('welcome');
});

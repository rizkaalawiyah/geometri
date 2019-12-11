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
    return view('welcome');
});
Route::get('menu', 'menu@index');
Route::get('menumateri', 'menu@menumateri');
Route::get('bangundatar/materi', 'bangundatar@index');
Route::get('bangundatar/persegi', 'bangundatar@persegi');
Route::get('bangundatar/trapesium', 'bangundatar@trapesium');
Route::get('bangundatar/persegipanjang', 'bangundatar@persegipanjang');
Route::get('bangundatar/layang', 'bangundatar@layang');
Route::get('bangundatar/jajargenjang', 'bangundatar@jajargenjang');
Route::get('bangundatar/ketupat', 'bangundatar@ketupat');
Route::get('bangunruang/kubus', 'bangunruang@kubus');
Route::get('bangunruang/balok', 'bangunruang@balok');
Route::get('bangunruang/limas', 'bangunruang@limas');
Route::get('bangunruang/tabung', 'bangunruang@tabung');
Route::get('bangunruang/kerucut', 'bangunruang@kerucut');
Route::get('bangunruang/bola', 'bangunruang@bola');


Route::get('menukuis', 'menu@menukuis');
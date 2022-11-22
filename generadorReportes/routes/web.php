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

Route::get('/', 'UserController@index');
Route::post('/index', 'UserController@check')->name('login.check');
Route::post('/login', 'UserController@logout')->name('user.logout');
Route::get('/login', 'UserController@index')->name('user.login');
Route::get('/index', 'UserController@refresh');
Route::get('/tablaprofesores', 'TableController@mostrarprofesores');
Route::get('/uct', 'NavbarController@cambiarUCT')->name('nav.uct');
Route::get('/contacto', 'NavbarController@cambiarContacto')->name('nav.contacto');
Route::get('/tablacarrera', 'TableController@mostrarcarreras');
Route::get('/tabladepartamento', 'TableController@mostrardepartamentos');
Route::get('/tablagasto', 'TableController@mostrargastos');
Route::get('/tablaramo', 'TableController@mostrarramos');
Route::get('/tablatipocarrera', 'TableController@mostrartipocarreras');
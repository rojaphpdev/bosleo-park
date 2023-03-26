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
use App\Model\User;
use App\CarDetails\Door;
use App\CarDetails\Tyre;
use App\CarDetails\Painting;
use App\CarDetails\Car;

Route::get('/', function () {
    return view('welcome');
});

//task1
Route::get('/users', function (){
$user = new User;
$user->setFirstName('John')
 ->setLastName('Doe')
 ->setEmail('john.doe@example.com');
echo $user;
});

//task2
Route::get('/cars', function (){
$user = new Car([new Door(true), new Tyre(false), new Painting(true) ]);;
});

//task3 
Route::get('/api','UserAPIController@fetchUsers');

Route::get('/allusers','UserAPIController@index');
Route::get('/users/edit/{id}','UserAPIController@edit');
Route::get('/export','UserAPIController@export');
Route::Post('/users/update/{id}','UserAPIController@update');
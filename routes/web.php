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

Route::get('/', function () {
    return view('welcome');
})->name('welcome.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

Route::view('dashboard','dashboard')->name('dashboard');




//Admin
Route::get('home','HomeController@index')->name('homeadmin');
Route::get('tableuser','UserController@index')->name('tableuser.index');
Route::get('regester','UserController@create')->name('regester.create');
Route::post('storregester','UserController@store')->name('regester.store');
Route::get('editregester/{id}','UserController@edit')->name('regester.edit');
Route::put('updateregester/{id}','UserController@update')->name('regester.update');
Route::delete('removeregester/{id}','UserController@delete')->name('removeregester.post');











// Route Client
Route::get('clients','clientcontrolle@index')->name('clients.index');
Route::get('clientncar','ncar_client@index')->name('ncarclient.index');
Route::post('ncarclient','ncar_client@priceclient')->name('priceclient.index');

Route::get('showclient/{id}','clientcontrolle@show')->name('showclient.show');
Route::get('createclient','clientcontrolle@create')->name('createclient.create');
Route::post('addclient','clientcontrolle@store')->name('addclient.store');
Route::get('editclient/{id}','clientcontrolle@edit')->name('editclient.edit');
Route::put('updateclient/{id}','clientcontrolle@update')->name('updateclient.update');
Route::delete('removeclient/{id}','clientcontrolle@delete')->name('removeclient.post');


//Route Car
Route::get('Car','carcontrolle@index')->name('car.index');
Route::get('Carrr','carcontrolle@indexx')->name('car.indexx');
Route::get('showcar/{id}','carcontrolle@show')->name('car.show');
Route::get('createcar','carcontrolle@create')->name('car.create');
Route::post('addcar','carcontrolle@store')->name('addcar.store');
Route::post('addcar2','carcontrolle2@store')->name('addcar2.store');
Route::get('editcar/{id}','carcontrolle@edit')->name('editcar.edit');
Route::put('editcar/{id}','carcontrolle@update')->name('updatecar.update');
Route::delete('removecar/{id}','carcontrolle@delete')->name('deletecar.delete');

//Route ourcar
Route::get('ourcar','ourcarcontrolle@index')->name('ourcar.index');
Route::get('ourcaruser','ourcaradmincontrolle@index')->name('ourcaradmin.index');

//Route logout
Route::get('logout','logoutcontolle@logout');


//Route Add Contract
Route::get('addcontra','contracontroller@index')->name('contra.index');
Route::post('ajax','contracontroller@function_ajax')->name('ajax.index');
Route::post('ascontra','contracontroller@deletcheck')->name('contra.deletcheck');



//Route dowlowd contract
Route::any('contractpdf','hpconroller@dowlowdpdf')->name('contractpdf.pdf');

// Route Table Contract
Route::get('tablecontra2','hpconroller@index')->name('contraform.index');
Route::get('showcontra/{id}','hpconroller@show')->name('show.contra');
Route::get('createcontra','hpconroller@create')->name('contra.create');
Route::post('storecontra','hpconroller@store')->name('contra.store');
Route::get('editcontra/{id}','hpconroller@edit')->name('contra.edit');
Route::put('updatecontra/{id}','hpconroller@update')->name('contra.update');
Route::delete('removecontra/{id}','hpconroller@delete')->name('delete.contra');



Route::get('checkrole','CheckController@index')->name('checkrole.index');


Route::get('dash','homecontroller@index')->name('admin.index');
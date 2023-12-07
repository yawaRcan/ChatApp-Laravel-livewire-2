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
// group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'App\Http\Livewire' ]

// Route::group(['prefix'=>'admin-contols','middleware'=>'auth','namespace'=>'App\Http\Livewire'], function(){
//      Route::get('setting','Setting')->name('setting');
// });

Route::get('/', function () {
    return redirect()->route('login');
});
Auth::routes(['verify' => true]);


Route::get('chat', function() {
   return view('layouts.master');
})->name('chatmain');

Route::get('chat/user/{id}','App\Http\Controllers\SelectedChatController@index')->name('chat.user');

Auth::routes();
Route::get('setting', function(){
   return view('layouts.settingpage');
})->name('setting');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('clear-cache', function(){
//     \Artisan::clear('cache');
// });
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
//COLOR OPE: C2C6C9
//COLOR FEO:
Route::get('/', function () {
    return view('welcome');
})->name('principal');


Route::get('/quienes-somos', function () {
    return view('quienes-somos');
})->name('quienes-somos');

Route::get('/nuestros-amigos', function () {
    return view('nuestros-amigos');
})->name('nuestros-amigos');


Route::get('/numeros', function () {
    return view('numeros');
})->name('numeros');

Route::get('/rrss', function () {
    return view('rrss');
})->name('rrss');

Route::get('/academias', function () {
    return view('academias');
})->name('academias');

Route::get('/formacion-continuada', function () {
    return view('ffcc');
})->name('formacion-continuada');

Route::get('/colegios', function () {
    return view('colegios');
})->name('colegios');

Route::get('/politica', function () {
    return view('politica');
})->name('politica');


Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/utils', function () {
    return view('utils');
})->name('utils');

Route::get('/pomodoro', function () {
    return view('pomodoro');
})->name('pomodoro');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

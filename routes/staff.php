<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::get('dashboard', [Admin\DashboardController::class, 'index'])
	->name('dashboard');


Route::group([
	'prefix' => '/management',
	'as'     => 'management.'
	], function(){

		Route::resource('users', Admin\UsersController::class);
	});
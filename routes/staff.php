<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::get('dashboard', [Admin\DashboardController::class, 'index'])
	->name('dashboard');


Route::group([
	'prefix' => '/management',
	'as'     => 'management.'
	], function(){


		Route::get('users/restore', [Admin\UsersController::class, 'restore'])
				->name('users.restore');
		Route::resource('users', Admin\UsersController::class);
	});
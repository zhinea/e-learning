<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;


Route::get('dashboard', [Admin\DashboardController::class, 'index'])
	->name('dashboard');
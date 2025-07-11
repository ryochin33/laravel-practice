<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RemotePostController;

Route::post('/remote-post', [RemotePostController::class, 'store']);
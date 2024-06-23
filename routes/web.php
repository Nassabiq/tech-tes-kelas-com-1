<?php

use App\Models\Packages;
use App\Models\Promotions;
use App\Models\Videos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'packages' => Packages::get(),
        'videos' => Videos::get(),
        'promotions' => Promotions::get(),
    ]);
});

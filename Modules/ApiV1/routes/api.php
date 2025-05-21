<?php

use Illuminate\Support\Facades\Route;

Route::get('', fn (): array => [
    'message' => 'API check works!',
    'version' => '1.0.0',
]);

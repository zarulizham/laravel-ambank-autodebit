<?php

use ZarulIzham\AutoDebit\Http\Controllers\CallbackController;

$routePath = config('duitnow.callback.path', 'dnad/callback');
$routeName = config('duitnow.callback.name', 'dnad.callback');

Route::match(['get', 'post'], $routePath, CallbackController::class)->name($routeName);

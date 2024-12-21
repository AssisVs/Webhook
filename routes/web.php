<?php

use App\Http\Controllers\SHookController;
use App\Http\Controllers\EHookController;
use Illuminate\Support\Facades\Route;
use Spatie\WebhookServer\WebhookCall;

Route::get('/', function () {
    ds('aaa');
    return view('sendhook');
});
Route::get('sHook', [SHookController::class, 'sHook'])->name('sHook');

Route::webhooks('webhook-receiving-url');

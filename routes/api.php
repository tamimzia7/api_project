<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;






Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/test", function () {
    return ["name" => "tamim", "age" => 22];
 
});


Route::get('/info', [InfoController::class, 'list']);
Route::post('/addinfo', [InfoController::class, 'addinfo']);

Route::put('/addinfo', [InfoController::class, 'updateinfo']);
// Route::get('/info', [InfoController::class, 'list']);
// Route::post('/info', [InfoController::class, 'add']);
// Route::put('/info/{id}', [InfoController::class, 'update']);
 
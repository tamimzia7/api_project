<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\info;

Route::get('/info', function () {
    return view('info');
});

Route::post('/info', function (Request $request) {
  
   

DB::table('info')->insert([
     'id'=> $request ->id,
    'name'=> $request ->name,
    'email'=> $request ->email,
    'batch'=> $request ->batch,
    
]);
return "added successfully";
});


// info::create({
//     'id'=> $request ->id,
//     'name'=> $request ->name,
//     'email'=> $request ->email,
//     'batch'=> $request ->batch,
// });

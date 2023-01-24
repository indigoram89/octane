<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    // for ($i = 0; $i < 1000; $i++) {
    //     rand(1, 9999);
    // }

    return response()->json($request->all());
});

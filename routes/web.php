<?php

use App\Http\Controllers\EmployeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.base');
});

Route::controller(EmployeController::class)->group(function(){
    Route::get('/employe','index')->name('index.employe');
       Route::post('/createemploye','createemploye')->name('create.employe');
       Route::put('/updateemploye/{id}','updateemploye')->name('update.employe');
       Route::delete('/deleteemploye/{id}','deleteemploye')->name('delete.categori');
});

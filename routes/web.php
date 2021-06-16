<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;



Route::get('/form', [FormValidtionController::class, 'createUserForm']);
Route::post('/form', [FormValidtionController::class, 'UserForm'])->name('validate.form');



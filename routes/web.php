<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("register", [StudentController::class, "openRegister"]);

Route::post("createStudent", [StudentController::class,"createStudent"]);

Route::get("display", [StudentController::class, "display"])->name("display");

Route::post("deleteStudent/{id}", [StudentController::class, "deleteStudent"]);

Route::post("editData", [StudentController::class, "editData"]);

Route::post("update", [StudentController::class, "update"]);
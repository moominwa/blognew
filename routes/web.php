<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('thk', function () {
    return view('new');
});
Route::get('admin', function () {
    return view('new');
});

Route::get('tarang', function () {
    return view('tarang');
})->name('tarang');

Route::get('registermenu', function () {
    return view('registermenu');
})->name('registermenu');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    //ไปหน้าadmin
    Route::get('/dashboard', function () {
        return view('admin');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/project', function () {
        return view('project');
    })->name('project');



    //ไปสำหรับ ไปที่หน้า project add
    Route::get('/project-add', function () {
        return view('project.add');
    })->name('project-add');


        //ไปที่หน้าแก้ไข
        Route::get('/project-edit/{id}', function ($id) {

            return view('project.edit',compact('id'));
        })->name('project-edit');
});

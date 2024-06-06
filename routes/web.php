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


// ต่ายแก้-------------------------------------------------------------------------------------------
Route::get('/', function () {
    return view('test');
});

Route::get('/open_close', function () {
    return view('open_close');
})->name('open_close');

Route::get('/check_team', function () {
    return view('check_team');
})->name('check_team');

Route::get('/check_pay', function () {
    return view('check_pay');
})->name('check_pay');

Route::get('/status_team', function () {
    return view('status_team');
})->name('status_team');

Route::get('/status_pay', function () {
    return view('status_pay');
})->name('status_pay');

Route::get('/check_player', function () {
    return view('check_player');
})->name('check_player');

Route::get('/addmin', function () {
    return view('addmin');
});




// จบ-------------------------------------------------------------------------------------------


// ปัง----------------------------------------------------------------------------------------
Route::get('/register_menu', function () {
    return view('registermenu');
})->name('registermenu');
Route::get('/score_table', function () {
    return view('score_table');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/list_team', function () {
    return view('list_team');
});
Route::get('/team_information', function () {
    return view('team_information');
});

Route::get('/player_information', function () {
    return view('player_information');
});
Route::get('/star_scorer', function () {
    return view('star_scorer');
});



Route::get('/score', function () {
    return view('score');
});

Route::get('/paymentsure', function () {
    return view('paymentsure');
});

// จบ-----------------------------------------------------------------------------------------



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

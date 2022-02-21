<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;
Use App\Http\Controllers\FutsalController;
Use App\Http\Controllers\FrontendController;
Use App\Http\Controllers\BookingController;
Use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[FrontendController::class, 'home']);


Route::get('/futsaldetails/{id}',[FrontendController::class, 'FutsalDetails']);
Route::get('/book/{id}',[FrontendController::class, 'Book']);
Route::post('/confirmbooking',[BookingController::class, 'store']);
Route::get('/mybookings',[FrontendController::class, 'MyBookings']);
Route::get('/logout',[UserController::class, 'logout']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';



// Route::get('/user',[UserController::class, 'index']);

 Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
        Route::get('/',[UserController::class, 'index']);
        
        Route::group(['prefix'=>'users','middleware'=>'auth'],function (){

    	    Route::get('/',[UserController::class, 'index']);
    	    Route::post('/updateuserinfo/{id}',[UserController::class, 'UpdateUser']);
    	    Route::get('/add-user',[UserController::class, 'addUser']);
            Route::post('/search-user',[UserController::class, 'searchuserForAdmin']);
            Route::post('/add-user',[UserController::class, 'addNewUser']);
            Route::get('/edit-user/{id}',[UserController::class, 'editUser']);
            Route::post('/edit-user/{id}',[UserController::class, 'updateUser']);
            Route::post('/delete-user/{id}',[UserController::class, 'deleteUser']);

        });
        Route::group(['prefix'=>'futsal','middleware'=>'auth'],function (){

    	    Route::get('/',[FutsalController::class, 'index']);
    	    Route::post('/{id}',[FutsalController::class, 'update']);
    	    Route::post('/updatefutsalinfo/{id}',[FutsalController::class, 'UpdateFutsal']);
    	    Route::get('/create',[FutsalController::class, 'create']);
            Route::post('/',[FutsalController::class, 'store']);
            Route::post('/add-futsal',[FutsalController::class, 'addNewFutsal']);
            Route::get('/{id}/edit',[FutsalController::class, 'edit']);
            Route::post('/edit-futsal/{id}',[FutsalController::class, 'updateFutsal']);
            Route::delete('/{id}',[FutsalController::class, 'destroy']);

        });

        Route::group(['prefix'=>'booking','middleware'=>'auth'],function (){
            Route::get('/',[BookingController::class, 'index']);
            Route::get('/{futsal_id}/confirm',[BookingController::class, 'ConfirmBooking']);
            Route::get('/{futsal_id}/cancel',[BookingController::class, 'CancelBooking']);
            Route::get('/{futsal_id}/close',[BookingController::class, 'CloseBooking']);


        });


    });

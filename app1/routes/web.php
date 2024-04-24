<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::post('/home',[App\Http\Controllers\HomeController::class, 'profile'])->name('home');
Route::get('/home',[App\Http\Controllers\HomeController::class, 'profile1'])->name('user1');



use App\Http\Controllers\UserController;
Route::group(['middleware' => 'auth'], function ()
{
    Route::get('/change-password', [UserController::class, 'changePassword'])->name('changePassword');
    Route::post('/change-password', [UserController::class, 'changePasswordSave'])->name('postChangePassword');
}
);
Route::group(['middleware' => 'auth'], function ()
{
    Route::get('/user/update/{id}', [UserController::class, 'updatedetails'])->name('updatedetails');
    Route::post('/update', [UserController::class, 'updatedetailssave'])->name('postupdatedetails');
    
}
);
Route::group(['middleware'],function ()
{
    Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('deleteu');
    //Route::post('/delete', [UserController::class, 'updatedetailssave'])->name('postupdatedetails');
    // Route::get('user', [UserController::class,'destroy'])->name('deleteu');

    
}
);

Route::get('/update',[App\Http\Controllers\UserController::class, 'display'])->name('user2');
Route::get('/delete',[App\Http\Controllers\UserController::class, 'delete'])->name('delete1');
Route::get('/delete',[App\Http\Controllers\UserController::class, 'displaydelete'])->name('displaydelete');

Route::get('/product',[App\Http\Controllers\UserController::class,'product'])->name('pp');

Route::post('/product',[App\Http\Controllers\UserController::class,'product'])->name('pp');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::patch('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/product/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/user',[App\Http\Controllers\UserController::class,'userlist'])->name('userlistdisplay');
Route::get('/user/delete', [UserController::class, 'getalldetails'])->name('userdestroy');
//Route::delete('/user/{id}/delete', [UserController::class, 'destroy'])->name('user.delete');





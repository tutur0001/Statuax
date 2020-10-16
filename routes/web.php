<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

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


// Menu navigation route

Route::get('/',[NavController::class, 'home']); //Home page
Route::get('statuette',[NavController::class, 'statuette']); //Display product page 
Route::get('service',[NavController::class, 'service']);       //Adding product page
Route::get('contact',[NavController::class, 'contact']);        //Contact page

// End of Menu navigation route 

// CRUD ROUTE

Route::post('/add-products',[ActionController::class, 'addProduct']);   //Create
Route::get('statuette',[NavController::class, 'displayProducts']);      //Read
Route::put('/edit',[NavController::class, 'getOneProductForEdit']);              //Edit
Route::put('/update-product',[ActionController::class, 'updateOneProduct']);    //Edit
Route::delete('/delete', [ActionController::class, 'deleteProduct']);   //Delete

// End of CRUD route
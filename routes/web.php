<?php

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

Route::get('/',function (){
    return view('welcome');
});
Route::get('customers/delete/{id?}','customersController@deleteCustomer');
Route::post('customers/add','customersController@processAddingCustomer');
Route::get('customers/add','customersController@addCustomer');
Route::get('customers','customersController@index');
Route::get('customersapi', function (){
    return response()->json(['status'=>true,'data'=>\App\Clients::all()]);
});

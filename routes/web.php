<?php

use Illuminate\Support\Facades\Route;

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
 
Route::get('/', function () {
    return view('welcome');
});

// //route for users - returning a string
// Route::get('/users', function () {
//     return 'welcome to the users route';
// });
// Route::get('eman', function(){
//     return 'hey, are you good';
// });
// //route to users returning array 
// Route::get('/users',function(){
//     return ['Eman','Asmaa','Alaa','Ibrahim','Ibtehal'];
// });
// //Route to users returning JSON object 
// Route::get('users',function(){
//     return response()->json([
//         'name'=>'eman',
//         'couse'=>'laravel beginner to advanced'
//     ]);
// });
// //route to users returning a function
// Route::get('/users',function(){
//     return redirect('/');
// });

// //firsproject.com == /
// //firstproject.com/users ==/users
Route::get('/home',function(){
    return view('home');
});
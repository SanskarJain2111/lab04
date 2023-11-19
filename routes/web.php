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

/*Route::get('/', function () {
    return "<h1>Hello from sanskar </h1>";
});*/

Route::get('/', function () {
    return view('Welcome');
});

// Route ::get('/aboutus', function () {
//     return view('aboutus');
// });

Route::view('/aboutus','aboutus',[
    'name'=> 'Sanskar',
]);

/*Route::get('/person/{name}', function (?string $name = 'Sanskar') {
    return "The name is $name";
})->name('person.index');*/



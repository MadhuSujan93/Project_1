<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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
    return view('welcome');
});
// Route::get('/post/{id}',function($id){
//     ddd($id);
//     return "<h1>Post $id </h1>";

// })-> where('id','[0-9]+');
// Route::get('/search',function(Request $req){
//     return $req->name." ".$req->city;

// });
Route::get('/listings',function(){
return view('listings',[
    'heading'=>'Job Listing',
   'listings'=> Listing::all()

]);
});

Route::get('listings/{id}',function($id){
    return view('listing',[
        'listing'=>Listing::find($id)
    ]);


});


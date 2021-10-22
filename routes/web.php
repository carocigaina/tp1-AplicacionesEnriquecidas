<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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

Route::view('/','welcome');
Route::get('hola', function() {
    
    return view('hola');

});

Route::get('adios', function() {

    return view('adios');

});

Route::get('portfolio/{slug}',function($slug){
        
    //dd($users); es tipo var_dump
    $user=User::with('skill')->with('education')->where('slug',$slug)->first();
    if($user){    
        return view('portfolio')->with('user', $user);
    }else{  
        return view('welcome');
    }

});

Route::get('portfolio',function(){
        //DUDAAAAAAAAAAAAAAAAAAAAAAAAA ESTA BIEN?
    //dd($users); es tipo var_dump
    $user=User::with('skill')->with('education')->with('skillProfessional')->with('works')->with('featuredProyects')->with('post')->latest()->get();
    
        return view('portfolio')->with('user', $user[0]);

    
    
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    
    return view('dashboard');
})->name('dashboard');

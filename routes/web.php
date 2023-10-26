<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IsvalideController;
use App\Http\Controllers\CommentaireController;

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

Route::middleware(['auth'])->group(function () {

    Route::get('/post',[PostController::class,'MesPost'])->name('MesPost');
    //route de commentaire
    Route::post('/commentaire',[CommentaireController::class,'store'])->name('commentaire');

    //update information of the profile
    Route::PUT('/profile/{item}/update',[AuthController::class,'update'])->name('information');
    Route::PUT('/password/{item}/update',[ProfileController::class,'password_change'])->name('password.change');

    Route::get('/profile',[AuthController::class,'profile'])->name('profile');
    Route::get('/deconnexion',[AuthController::class,'deconnexion'])->name('deconnexion');
});

    Route::get('/about',function(){
        return view('about');
    });

    Route::get('/dashboard',function(){
        return view('dashboard');
    })->name('dashboard');

    Route::get('/contact',function(){
        return view('contact');
    });
    Route::resource('posts', PostController::class)->except('index');

//route ressource
Route::get('/',[PostController::class,'index'])->name('posts.index');

//route de connexion
Route::get('/connexion',[AuthController::class,'connexion'])->name('connexion');
Route::post('/connexion',[AuthController::class,'authenticate']);

//route d'inscription
Route::get('/inscription',[AuthController::class,'create'])->name('inscription');
Route::post('/inscription',[AuthController::class,'store'])->name('register');

//administrator
Route::resource('admin', AdminController::class)->except('index');
Route::get('/admin-dashboard',[AdminController::class,'index'])->name('admin.index');

//affichage et suppression de tout les utilisateurs du blog
Route::get('/utilisateurs',[UserController::class,'index'])->name('utilisateurs');
Route::delete('/supprimer/{user}',[UserController::class,'delete'])->name('suppression');

//affichage de tous  les posts non validée
Route::get('/admin.publication-en-attente-de-validation',[IsvalideController::class,'index'])->name('non-validé');
Route::get('/publication-en-attente',[IsvalideController::class,'attente'])->name('en-attente');

//affichage de tous  les posts refuser
Route::get('/publication-refuser',[IsvalideController::class,'refuse'])->name('refuser');

//validation et refus du post
Route::PUT('/validation/{item}/update',[IsvalideController::class,'update'])->name('validé');

//suppression de post sans validation
Route::delete('/suppresion/{item}',[IsvalideController::class,'delete'])->name('supprimer');

// catégories
Route::resource('categories', CategoryController::class);

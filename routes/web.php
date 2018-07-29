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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Lien pour page accueuil
Route::get('/','HomeController@index')->name('home');

//groupe de route qui ont pour prefixe etudiants
Route::prefix('etudiants')->group(function(){
	
//ajouter un etudiant
Route::post('/add', 'EtudiantController@add')->name('addEtudiant');

//detail sur un etudiant
Route::get('/show/{id}','EtudiantController@show')->name('showEtudiant')->where('id', '[0-9]+');

//lien modifier pour afficher le formulaire de modification
Route::get('/edit/{id}','EtudiantController@edit')->name('editEtudiant')->where('id', '[0-9]+');

//Lien modifier valider la modification
Route::post('/update/{id}','EtudiantController@update')->name('updateEtudiant')->where('id', '[0-9]+');

});
Auth::routes();


//lien pour le choix de la langue
Route::post('/language', array(
	'before' 	=> 	'csrf', 
	'as' 	=> 	'language-chooser', 
	'uses' 			=> 	'LanguageChooserController@chooser'
));

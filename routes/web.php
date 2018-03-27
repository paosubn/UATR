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

Route::get('/', 'LoginActiveController@index');
Route::get('/cerrar', 'LoginActiveController@cerrar');
Route::get('/estado/{id}/{tipo}', 'PreregistroController@estado');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/verificar', 'LoginActiveController@comprobar');
/*Route::get('/login', function(){
	return view('auth.login');

});*/
//Route::get('/loginactive', 'LoginActiveController@index');
Route::get('FormatoRegistro/{id}', 'PDFcontroller@datos');



/************Rutas para formulario de solicitante/victima*************/
	Route::get('/Crear-caso', 'DenuncianteController@crearCaso')->name('inicio');
	//Route::post('storecarpeta', 'CarpetaController@storeCarpeta')->name('store.carpeta');
	//Route::get('/carpeta-inicial/{id}', 'CarpetaController@index')->name('carpeta');

	Route::get('agregar-denunciante/{idCaso}', 'DenuncianteController@showForm')->name('new.denunciante');
	Route::post('storedenunciante', 'DenuncianteController@storeDenunciante')->name('store.denunciante');

/*********************************************************************/

/**********************Rutas de prueba***********************/
Route::get('/template', function(){
	return view('template.main2');

});


Route::get('/pruebasIndex', function(){
	return view('prueba-index');

});
/**************************************************************/

Route::resource('/preregistro','PreregistroController');
Route::post('/showbyfolio', 'PreregistroAuxController@showbyfolio');
Route::get('/showbyfolio', 'PreregistroAuxController@showbyfolio');
Route::get('/showbymunicipio/{id}', 'PreregistroAuxController@showbymunicipio');
Route::get('/encola', 'PreregistroAuxController@encola');
Route::get('/urgentes', 'PreregistroAuxController@urgentes');
Route::get('/turno', 'PreregistroAuxController@turno');
Route::get('/Traerturno', 'PreregistroAuxController@Traerturno');
Route::get('/devolver', 'PreregistroAuxController@devolverturno');



//  Route::get('/welcome', function(){
//  	return view('welcome');

//   });
// //   Route::post('welcome/', 'PreregistroAuxController@estado');
Route::resource('/predenuncias','PreregistroAuxController');
Route::resource('/solicitante','solicitanteController');


Route::get('/preregistroWeb/pre-auxiliar', 'PreregistroAuxController@create'); //ver formulario
Route::post('/preregistroWeb', 'PreregistroAuxController@store'); //registar

/*---------Rutas para los selects dinámicos-------------*/

Route::get('municipios/{id}', 'RegisterController@getMunicipios');
	Route::get('localidades/{id}', 'RegisterController@getLocalidades');
Route::get('codigos/{id}', 'RegisterController@getCodigos');
Route::get('colonias/{cp}', 'RegisterController@getColonias');





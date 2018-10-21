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

use Illuminate\Support\Facades\Input;

/*Route::get('/', function () {
    

    return view('welcome');
});*/

Route::get('/','PublicadoController@VerPublicados');


Route::get('/Adm/{id}','RolController@AdministradorRole');
Route::get('/Revisor/{id}','RolController@RevisorRole');
Route::get('/Cliente/{id}','RolController@ClienteRole');


Route::get('/ayuda','AyudaController@Ayuda');

Route::get('/colorAzul/{id}','ColorController@Azul');
Route::get('/colorNegro/{id}','ColorController@Negro');
Route::get('/colorMorado/{id}','ColorController@Morado');
Route::get('/colorVerde/{id}','ColorController@Verde');
Route::get('/colorRojo/{id}','ColorController@Rojo');
Route::get('/colorAmarillo/{id}','ColorController@Amarillo');

Route::get('/perfil/{id}','perfilController@index');
Route::post('/foto/{id}', 'perfilController@foto');

Route::prefix('administrador')->group(function() {
	Route::get('/informes/rechazados','InformesController@MostrarInformeAvisosRechazados')->name('admin.crear-informe-rechazado');
	Route::get('/informes/aceptados','InformesController@MostrarInformeAvisosAceptados')->name('admin.crear-informe-aceptado');
	Route::get('/informes/totalavisos','InformesController@MostrarInformeAvisosTotal')->name('admin.crear-informe-total-avisos');
	Route::get('/informes/personalizado','InformesController@MostrarInformeAvisosPersonalizado')->name('admin.crear-informe-personalizado');
});

Route::prefix('cliente')->group(function() {
	Route::get('/anuncios/publicar','AnunciosController@PublicarAnuncios')->name('cliente.publicar-anuncio');
	Route::post('/anuncios/publicar','AnunciosController@PostPublicarAnuncios')->name('cliente.publicar-anuncio.submit');
	Route::get('/anuncios/ver','AnunciosController@VerAnuncios')->name('cliente.ver-anuncio');
});

Route::prefix('revisor')->group(function() {
	Route::get('/anuncios/revisar/{id}','AnunciosController@RevisarAnuncio');
	Route::get('/anuncios/ver','AnunciosController@VerAllAnuncio');
	Route::post('/anuncios/aceptar/{id}','AnunciosController@PostRevisarAnuncios');

});


//Route::prefix()
Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});


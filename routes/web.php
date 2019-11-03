<?php
/*
/	Agrupación de todas las rutas relacionadas a las peticiones realizadas por el usuario del dashboard
*/
Route::group(['middleware' => 'auth'], function () {
	Route::group(['namespace' => 'Admin'], function () {

		// Rutas de Publicaciones (Posts)

		Route::get('admin/post/listado', 'PostsController@index')->name('admin.post.index');

		Route::get('admin/post/nuevo', 'PostsController@create')->name('admin.post.create');

		Route::post('admin/post/nuevo', 'PostsController@store')->name('admin.post.store');

		Route::delete('admin/post/listado/{id}', 'PostsController@destroy')->name('admin.post.destroy');

		Route::get('admin/home', 'HomeController@index')->name('admin.home');

		Route::post('admin/home/contacto', 'MensajesController@store')->name('admin.mensajes.store');

		Route::get('admin/home/bandejaentrada', 'MensajesController@index')->name('admin.mensaje.index');

		Route::get('admin/home/bandejaentrada/mensaje/{id}', 'MensajesController@show')->name('admin.leermensaje')->middleware();

		// Rutas de Eventos (Agenda)

		Route::get('admin/home/evento', 'AgendasController@index')->name('admin.evento.index')->middleware();

		Route::get('admin/home/evento/nuevo', 'AgendasController@create')->name('admin.evento.create');

		Route::post('admin/home/evento/nuevo', 'AgendasController@store')->name('admin.evento.store')->middleware();

		// Rutas de Censados

		Route::get('admin/home/censado/nuevo', 'RegisteredsController@create')->name('admin.censo.create');

		Route::get('admin/home/censado/listado', 'RegisteredsController@index')->name('admin.censo.index');

		//Ruta para eliminar el tutor de un censado, pero no borra el tutor.
		Route::get('censado/{tutor}/{censado}', 'TutorsController@eliminarTutor')->name('tutor.eliminar');

		//Ruta de recursos para Tutores
		Route::get('admin/home/tutor/nuevo', 'TutorsController@create')->name('admin.tutor.create');

		//Ruta de recursos para Voluntarios
		Route::get('admin/home/voluntario/nuevo', 'VolunteersController@create')->name('admin.voluntario.create');

		Route::get('admin/home/voluntario/listado', 'VolunteersController@index')->name('admin.voluntario.index');

		Route::get('admin/home/voluntario/editar/{id}', 'VolunteersController@edit')->name('admin.voluntario.edit');

		Route::get('admin/home/voluntario/show/{id}', 'VolunteersController@show')->name('admin.voluntario.show');

		Route::post('admin/home/voluntario/guardando', 'VolunteersController@store')->name('admin.voluntario.store');

		Route::post('admin/home/voluntario/actualizando', 'VolunteersController@update')->name('admin.voluntario.update');
		
		// Admin auth Routes

		Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');

		Route::post('admin-login', 'Auth\LoginController@login')->name('admin.login');

	});
});

/*
/	Agrupación de todas las rutas relacionadas a las peticiones realizadas por el front-end
*/
Route::group(['namespace' => 'Web'], function () {
	/*
	/	Retorna todas las publicaciones en una variable llamada $publicaciones
	/	Los tags son accedidos por medio de un foreach de la siguiente manera $publicacion->tags
	/	tag->name
	/	Las publicaciones se retornan paginadas.
	/	También retorna una colección de datos para la agenda, denominado $eventos.
	*/
	Route::get('/home', 'HomeController@index')->name('web.home.index');

	Route::get('/home/publicaciones', 'HomeController@publicaciones')->name('web.publicaciones.index');

	Route::post('/home', 'HomeController@fetch')->name('web.home.fetch');

	Route::get('/home/publicacion/{slug}', 'HomeController@show')->name('web.publicacion.show');

	Route::get('/home/actividades', 'HomeController@actividades')->name('web.actividades.index');

	Route::get('/home/miembros', 'HomeController@miembros')->name('web.informacion.miembros');

	Route::get('/home/quienes-somos', 'HomeController@quienesSomos')->name('web.informacion.history');

	Route::get('/home/registro', 'HomeController@registrarse')->name('web.home.registrarse');

	Route::get('/home/voluntario', 'HomeController@voluntario')->name('web.home.voluntario');

	Route::get('/home/donar', 'HomeController@donar')->name('web.home.donar');

	Route::get('/home/sindrome', 'HomeController@sindrome')->name('web.sindrome.index');

	Route::get('/home/contacto', 'HomeController@contacto')->name('web.home.contacto');

});

Route::get('admin-logout','Auth\LoginController@logout')->name('admin.logout');

// Route::get('/', 'Web\HomeController@index');





// Route::get('listarcensado', function () {
//     return view('admin.censo.listarcensado');
// });

// Route::get('creartutor', function () {
//     return view('admin.censo.creartutor');
// });

// Route::get('listartutor', function () {
//     return view('admin.censo.listartutor');
// });



Auth::routes();

Route::resource('pensiones', 'Admin\PensionsController');
Route::resource('obrassociales', 'Admin\HealthinsurancesController');


Route::post('buscar', 'Admin\PensionsController@buscar')->name('buscar');



// Rutas para la web

// Route::get('index', function () {
//     return view('web.index');
// });

// Rutas para la web

Route::get('forms', function () {
    return view('web.Forms.forms');
});
Route::get('history', function () {
    return view('web.Info.history');
});
Route::get('members', function () {
    return view('web.Info.members');
});
Route::get('syndrome', function () {
    return view('web.syndrome.syndrome');
});
Route::get('contact', function () {
    return view('web.Contact.contact');
});

Route::get('activities', function () {
    return view('web.Activities.activities');
});
// Route::get('post', 'Web/PostsController@post')->name('post');

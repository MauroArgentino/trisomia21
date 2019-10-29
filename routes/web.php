<?php

Route::group(['namespace' => 'Admin'], function () {

    //     Route::get('admin/post/nuevo', 'PostsController@create')->name('admin.post.create');

    //     Route::get('admin/home', 'HomeController@index')->name('admin.home');

    //     Route::get('admin/tag', 'TagsController@index')->name('admin.tag.tag');

    //     Route::get('admin/categoria', 'CategoriasController@index')->name('admin.categoria.categoria');

    //     Route::post('home/contacto', 'MensajesController@store')->name('admin.mensajes.store');

    //     // Admin auth Routes

    //     Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');

    //     Route::post('admin-login', 'Auth\LoginController@login')->name('admin.login');

    //     Route::get('admin-logout', 'Auth\LoginController@logout')->name('admin.logout');

    //     Route::get('admin/home/bandejaentrada', 'MensajesController@index')->name('admin.bandejaentrada')->middleware();

    //     Route::get('admin/home/bandejaentrada/mensaje', 'MensajesController@index')->name('admin.leermensaje')->middleware();

    //     Route::get('admin/home/evento', 'AgendasController@create')->name('admin.evento.create')->middleware();

    //     Route::post('admin/home/evento', 'AgendasController@store')->name('admin.evento.store')->middleware();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('crearcensado', function () {
    return view('admin.censo.crearcensado');
});

Route::get('listarcensado', function () {
    return view('admin.censo.listarcensado');
});

Route::get('creartutor', function () {
    return view('admin.censo.creartutor');
});

Route::get('listartutor', function () {
    return view('admin.censo.listartutor');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('pensiones', 'Admin\PensionsController');
Route::resource('obrassociales', 'Admin\HealthinsurancesController');
Route::post('buscar', 'Admin\PensionsController@buscar')->name('buscar');

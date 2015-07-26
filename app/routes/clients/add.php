<?php

$app->get('/clients/add', function() use($app) {
	
	$app->render('/clients/add.twig');
	
})->name('clients-add');

$app->post('/clients/add', function() use($app) {
	
	$request = $app->request();
	
	$nombre = $request->post('nombre');
	
	$user = $app->clients->create([
			'client_nombre' => $nombre
		]);

	$app->flash('success','Cliente Agregado satisfactoriamente');
    $app->redirect('/clients');

})->name('clients-add-post');
<?php

$validation = function() use($app) {

	$request = $app->request;

	$nombre = $request->post('client_nombre');
	$calle = $request->post('client_calle');
	$email = $request->post('client_correo'); 

	$v = $app->validation;

	return $v->validate([
		'nombre'	=> [$nombre, 'required'],
		'calle'		=> [$calle, 'required'],
		'correo'	=> [$email, 'email']
	]);

};

$app->get('/clients/add', function() use($app) {
	
	$app->render('/clients/add.twig');
	
})->name('clients-add');

$app->post('/clients/add', function() use($app, $validation) {
	
	$request = $app->request;
	
	$v = $validation();

	if ($v->passes()) {

		$user = $app->clients->create($request->post());

		$app->flash('success','Cliente Agregado satisfactoriamente');
    	$app->redirect('/clients');

	} else {

		$app->render('clients/add.twig', [
			'errores'	=> 'Error, verifica la informacion',
			'request'	=> $request,
			'errors' 	=> $v->errors()
		]);
	}

})->name('clients-add-post');
<?php
	
$app->get('/clients', function() use($app) {
	
	$clients = $app->clients->get();

	$app->render('clients/clients.twig', [
		'clients' => $clients
	]);

	//dd($app->clients->get()->toArray());
	
})->name('clients');

<?php

use Illuminate\Pagination\Paginator;

$app->get('/clients', function() use($app) {
	
	$currentPage = $app->request()->get('page');

	Paginator::currentPageResolver(function() use ($currentPage) {
    	
    	return $currentPage;
	
	});

	$clients = $app->clients->paginate(5);

	$clients->setPath('clients');

	$app->render('clients/clients.twig', [
		'clients' => $clients
	]);

	//dd($app->clients->get()->toArray());
	
})->name('clients');

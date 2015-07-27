<?php

$app->get('/clients/show/:id', function($id) use($app) {

	$app->render('/clients/show.twig', [

		'id'	=> $id
	]);

})->name('clients-show');
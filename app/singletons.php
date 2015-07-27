<?php

use lalocespedes\Models\Clients;
use lalocespedes\Validation\Validator;

$app->container->singleton('clients', function() use($app) {
	return new Clients();
});

$app->container->singleton('validation', function() use($app) {
	return new Validator();
});
<?php

use lalocespedes\Models\Clients;

$app->container->singleton('clients', function() use($app) {
	return new Clients();
});
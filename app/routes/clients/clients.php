<?php
	
$app->get('/clients', function() use($app) {
	
	dd($app->clients->get()->toArray());
	
});

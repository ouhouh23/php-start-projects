<?php

function abort ($code = 404) {
	http_response_code(404);

	require "views/http-errors/{$code}.php";

	die();
}

function router ($uri, $routes) {
	if (array_key_exists($uri, $routes)) {
		require $routes[$uri];
	} else {
		abort();
	}
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = require "routes.php";

router($uri, $routes);
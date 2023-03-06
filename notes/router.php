<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
	'/' => 'controllers/index.php',
	'/documents' => 'controllers/documents.php',
	'/statistics' => 'controllers/statistics.php',
	'/notes' => 'controllers/notes.php',
	'/note' => 'controllers/note.php'
];

function abort ($code = 404) {
	http_response_code(404);

	require "views/{$code}.php";

	die();
}

function router ($uri, $routes) {
	if (array_key_exists($uri, $routes)) {
		require $routes[$uri];
	} else {
		abort();
	}
}

router($uri, $routes);
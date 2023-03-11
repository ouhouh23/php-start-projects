<?php

use Core\Response;

function dd($value) {
	echo "<pre>";
	var_dump($value);
	echo "</pre>";

	die();
}

function abort ($code = 404) {
	http_response_code(404);

	require view_path("http-errors/{$code}.php");

	die();
}

function authorization($condition, $response = Response::FORBIDDEN) {
	if (! $condition) {
		abort($response);
	}
}

function base_path ($path) {
	return BASE_PATH . $path;
}

function view_path ($path) {
	return base_path('views/' . $path);
}
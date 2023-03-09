<?php
	function dd($value) {
		echo "<pre>";
		var_dump($value);
		echo "</pre>";

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
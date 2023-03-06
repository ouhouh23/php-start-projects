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
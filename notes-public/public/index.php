<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "core/functions.php";

spl_autoload_register (function ($class) {
	str_replace('//', DIRECTORY_SEPARATOR, $class);

	require base_path("{$class}.php");
});

require base_path("core/router.php");

<?php

$heading = 'note create';

$config = require "config.php";
require "Validator.php";

$db = new Database($config, 'root', '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$errors = [];

	if (! Validator::string($_POST['body'], 1, 100)) {
		$errors['body'] = 'Error, text required and less than 100 symbols.';
	}

	if(empty($errors)) {
		$db -> query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', ['body' => $_POST['body'], 'user_id' => 1]);
	}
}

require "views/notes/create.view.php";

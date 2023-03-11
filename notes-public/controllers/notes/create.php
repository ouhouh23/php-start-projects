<?php

use Core\App;
use Core\Validator;

$heading = 'note create';

$db = App::getContainer() -> resolve('Core\Database');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$errors = [];

	if (! Validator::string($_POST['body'], 1, 100)) {
		$errors['body'] = 'Error, text required and less than 100 symbols.';
	}

	if(empty($errors)) {
		$db -> query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', ['body' => $_POST['body'], 'user_id' => 1]);
	}
}

require view_path("/notes/create.view.php");

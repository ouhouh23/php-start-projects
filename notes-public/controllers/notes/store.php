<?php

use Core\App;
use Core\Validator;

$heading = 'store';

$db = App::getContainer() -> resolve('Core\Database');

$errors = [];

if (! Validator::string($_POST['body'], 1, 100)) {
	$errors['body'] = 'Error, text required and less than 100 symbols.';

	require view_path("/notes/create.view.php");
}

if(empty($errors)) {
	$db -> query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', ['body' => $_POST['body'], 'user_id' => 1]);
	header('location: /notes');
}

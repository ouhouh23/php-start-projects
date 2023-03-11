<?php

use Core\App;
use Core\Validator;

$heading = 'update';

$db = App::getContainer() -> resolve('Core\Database');

$user = 1;

$id = $_POST['id'];

$note = $db -> query("select * from notes where id = :id", ['id' => $id]) -> findOrFail();


$errors = [];

if (! Validator::string($_POST['body'], 1, 100)) {
	$errors['body'] = 'Error, text required and less than 100 symbols.';

	require view_path("/notes/edit.view.php");
}

if(empty($errors)) {
	$db -> query('update notes set body = :body where id = :id', ['body' => $_POST['body'], 'id' => $_POST['id']]);
	header('location: /notes');
}

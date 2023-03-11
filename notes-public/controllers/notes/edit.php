<?php

use Core\App;

$heading = 'Edit note';

$db = App::getContainer() -> resolve('Core\Database');

$user = 1;

$id = $_GET['id'];

$note = $db -> query("select * from notes where id = :id", ['id' => $id]) -> findOrFail();

authorization($note['user_id'] === $user);

require view_path("/notes/edit.view.php");

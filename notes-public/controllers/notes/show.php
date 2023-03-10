<?php

use Core\Database;

$config = require base_path("config.php");

$db = new Database($config, 'root', '');

$heading = 'note';

$user = 1;

$id = $_GET['id'];

$note = $db -> query("select * from notes where id = :id", ['id' => $id]) -> findOrFail();

authorization($note['user_id'] === $user);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$db -> query("delete from notes where id = :id", ['id' => $id]);

	header('location: /notes');
}


require view_path("/notes/show.view.php");

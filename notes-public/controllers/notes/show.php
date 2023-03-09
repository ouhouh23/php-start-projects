<?php

$config = require base_path("config.php");

$db = new Database($config, 'root', '');

$user = 1;

$id = $_GET['id'];

$note = $db -> query("select * from notes where id = :id", ['id' => $id]) -> findOrFail();

authorization($note['user_id'] === $user);

$heading = 'note';

require view_path("/notes/show.view.php");

<?php

use Core\App;

$db = App::getContainer() -> resolve('Core\Database');

$heading = 'destroy';

$user = 1;

$id = $_POST['id'];

$note = $db -> query("select * from notes where id = :id", ['id' => $id]) -> findOrFail();

authorization($note['user_id'] === $user);

$db -> query("delete from notes where id = :id", ['id' => $id]);

header('location: /notes');

die();

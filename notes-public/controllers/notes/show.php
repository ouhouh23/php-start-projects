<?php

use Core\App;

$db = App::getContainer() -> resolve('Core\Database');


$heading = 'note';

$user = 1;

$id = $_GET['id'];

$note = $db -> query("select * from notes where id = :id", ['id' => $id]) -> findOrFail();

authorization($note['user_id'] === $user);

require view_path("/notes/show.view.php");

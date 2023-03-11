<?php

use Core\App;

$db = App::getContainer() -> resolve('Core\Database');

$notes = $db -> query("select * from notes where user_id = ?", [1]) -> findAll();

$heading = 'notes';

require view_path("/notes/index.view.php");

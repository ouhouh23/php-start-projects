<?php

$config = require base_path("config.php");

$db = new Database($config, 'root', '');

$notes = $db -> query("select * from notes where user_id = ?", [1]) -> findAll();

$heading = 'notes';

require view_path("/notes/index.view.php");

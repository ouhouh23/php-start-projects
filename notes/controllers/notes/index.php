<?php

$config = require "config.php";

$db = new Database($config, 'root', '');

$notes = $db -> query("select * from notes where user_id = ?", [1]) -> findAll();

$heading = 'notes';

require "views/notes/index.view.php";

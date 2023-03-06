<?php

require "functions.php";
require "Database.php";
// require "router.php";

$config = require "config.php";

$db = new Database($config, 'root', '');
$posts = $db -> query("select * from posts where id > 1") -> fetchAll();

foreach ($posts as $post) {
	echo "<li>{$post['body']}</li>";
}
<?php

$router -> get('/', 'controllers/index.php');
$router -> get('/documents', 'controllers/documents.php');
$router -> get('/statistics', 'controllers/statistics.php');

$router -> get('/notes', 'controllers/notes/index.php');
$router -> get('/note', 'controllers/notes/show.php');
$router -> get('/note/create', 'controllers/notes/create.php');
$router -> get('/note/edit', 'controllers/notes/edit.php');

$router -> delete('/note/edit', 'controllers/notes/destroy.php');
$router -> patch('/note/edit', 'controllers/notes/update.php');
$router -> post('/note/create', 'controllers/notes/store.php');
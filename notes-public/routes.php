<?php

$router -> get('/', 'controllers/index.php');
$router -> get('/documents', 'controllers/documents.php');
$router -> get('/statistics', 'controllers/statistics.php');

$router -> get('/notes', 'controllers/notes/index.php');
$router -> get('/note', 'controllers/notes/show.php');
$router -> get('/note/create', 'controllers/notes/create.php');

$router -> delete('/note', 'controllers/notes/destroy.php');
$router -> post('/note/create', 'controllers/notes/store.php');
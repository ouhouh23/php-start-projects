<?php

use Core\App;

$heading = 'note create';

$db = App::getContainer() -> resolve('Core\Database');

require view_path("/notes/create.view.php");

<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controller\TaskController;

$controller = new TaskController();

$controller->execute();

?>

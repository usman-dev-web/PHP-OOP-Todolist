<?php

use Repository\RepositoryImpl;
use Service\ServiceImpl;
use View\TodolistView;

require_once __DIR__ . "/Entity/Todolist.php";
require_once __DIR__ . "/Repository/TodolistRepository.php";
require_once __DIR__ . "/Service/TodolistService.php";
require_once __DIR__ . "/Utility/Input.php";
require_once __DIR__ . "/View/TodolistView.php";

// create object
$repo = new RepositoryImpl();
$service = new ServiceImpl($repo);
$view = new TodolistView($service);

echo "APLIKASI TODOLIST" . PHP_EOL;
$view->showDataTodo(); // call method from Object View
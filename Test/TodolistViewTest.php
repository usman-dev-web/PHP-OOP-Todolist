<?php

use Repository\RepositoryImpl;
use Service\ServiceImpl;
use View\TodolistView;

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Utility/Input.php";
require_once __DIR__ . "/../View/TodolistView.php";

// test view show todo
function testViewShowTodo(){
    $repo = new RepositoryImpl();
    $service = new ServiceImpl($repo);
    $view = new TodolistView($service);
    
    // test add todo
    $service->addTodolist("php dasar");
    $service->addTodolist("php oop");
    $service->addTodolist("php database");

    // test view remove todolist
    $view->addTodo();

    // test view remove todolist
    $view->removeTodo();

    // test view todolist
    $view->showDataTodo();


}

testViewShowTodo();
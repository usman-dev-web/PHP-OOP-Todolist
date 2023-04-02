<?php

use Repository\RepositoryImpl;
use Service\ServiceImpl;

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

// test add todo and show todo
function testAddRemoveAndShowTodo(){
    $repo = new RepositoryImpl();
    $service = new ServiceImpl($repo);
    
    // test add todo
    $service->addTodolist("php dasar");
    $service->addTodolist("php oop");
    $service->addTodolist("php database");

    // test show todo
    $service->showTodo();

    // test remove todo
    $service->removeTodolist(4); // remove todo from number
    $service->showTodo();
}

testAddRemoveAndShowTodo();

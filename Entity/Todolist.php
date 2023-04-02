<?php

// create representasi table database
namespace Entity{
    class Todolist{
        private string $todo; // properties for insert todo

        // construck method for initialization string $todo
        function __construct(string $todo = "")
        {
            $this->todo = $todo;
        }

        // method get data for display in screen
        function getTodo():string{
            return $this->todo;
        }

        // method set data for insert todo
        function setTodo(string $todo){
            $this->todo = $todo;
        }
    }
}
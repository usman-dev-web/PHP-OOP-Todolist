<?php

namespace View{

    use Service\Service;
    use Utility\Input;

    interface View{
        function showDataTodo():void; // display all data todo
        function addTodo():void; // display input todo
        function removeTodo():void; // display input remove todo
    }

    // implements interface
    class TodolistView implements View{
        private Service $service; // properties reference to Service

        // construct method for initialization Service
        function __construct(Service $service)
        {
            $this->service = $service;
        }

        // show todo
        function showDataTodo(): void
        {

            while(true){
                // call method show data todo from service
                $this->service->showTodo();
    
                // print list menu
                echo "MENU" . PHP_EOL;
                echo "1. Add Todo" . PHP_EOL;
                echo "2. Delete Todo" . PHP_EOL;
                echo "x. Exit" . PHP_EOL;
                
                // input user
                $input = Input::input("Masukan Pilihan (x : untuk keluar)");
    
                // check input user
                if($input == "1"){
                    $this->addtodo();
                }else if($input == "2"){
                    $this->removeTodo();
                }else if($input == "x"){
                    break;
                }else{
                    echo "Input tidak tersedia" . PHP_EOL;
                }
            }
            echo "Terimakasih sudah menggunakan Aplikasi Todolist" . PHP_EOL;
        }

        // view add todo
        function addTodo(): void
        {
            echo "Add Todolist" . PHP_EOL;
            $input = Input::input("Masukan Todolist (x : untuk membatalkan)");
            
            // check input user
            if($input == "x"){
                echo "Batal Menambah Todo" . PHP_EOL;
            }else{
                $this->service->addTodolist($input);
            }
        }

        // view remove todo
        function removeTodo(): void
        {
            echo "Remove Todolist" . PHP_EOL;
            $input = Input::input("Masukan No Todolist (x : untuk membatalkan)");
            
            // check input user
            if($input == "x"){
                echo "Batal Menghapus Todo" . PHP_EOL;
            }else{
                $this->service->removeTodolist($input);
            }
        }
    }
}
<?php

// code for service repository
namespace Service{

    use Entity\Todolist;
    use Repository\Repository;
    use Repository\RepositoryImpl;

    // interface
    interface Service{
        function showTodo():void; // for show all data todo
        function addTodolist(string $todo):void; // for add todo
        function removeTodolist(int $number):void; // for remove todo
    }

    // implements interface
    class ServiceImpl implements Service{
        private Repository $repository; // reference to repository

        // method construct for initialization Repository
        function __construct(Repository $repository)
        {
            $this->repository = $repository;
        }

        // method show data todo
        function showTodo(): void
        {
            $todolist = $this->repository->showALl(); // call method from repository
            // looping data from repository
            foreach($todolist as $number => $value){
                echo "$number. " . $value->getTodo() . PHP_EOL;
            }
        }

        // method add todo
        function addTodolist(string $todo): void
        {
            // create object Todolist from Entity
            $todolist = new Todolist($todo);
            $this->repository->save($todolist);
            echo "Berhasil Menambah Todolist" . PHP_EOL;
        }

        // method remove todo
        function removeTodolist(int $number): void
        {
            if($this->repository->remove($number)){
                echo "Berhasil menghapus todo No.$number" . PHP_EOL;
            }else{
                echo "Gagal! todo No.$number tidak ada" . PHP_EOL;
            }
            
        }

    }
}
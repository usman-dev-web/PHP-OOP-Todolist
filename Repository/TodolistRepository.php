<?php

// code for save the todolist
namespace Repository{

    use Entity\Todolist;

    // interface 
    interface Repository{
        function save(Todolist $todolist):void; // method save data todolist
        function remove(int $number):bool; // method remove data todolist
        function showALl():array; // method for show all data todolist
    }

    // implements interface
    class RepositoryImpl implements Repository{
        private array $todolist = []; // properties for accomondate todo in array
        // method save todo
        function save(Todolist $todolist): void
        {
            // check number of todolist, and + 1 number todo to start with number 1
            $number = sizeof($this->todolist) + 1;
            // insert todo to array
            $this->todolist[$number] = $todolist;
        }

        // method remove todo
        function remove(int $number): bool
        {
            // check if user input number todo more than data todo, cancel remove
            if($number > sizeof($this->todolist)){
                return false; // cancel
            }

            // looping all data todo
            for($i = $number; $i < sizeof($this->todolist); $i++){
                // todolist number = todolist numer + 1
                $this->todolist[$i] = $this->todolist[$i + 1];
            }

            // remove lates number todo
            unset($this->todolist[sizeof($this->todolist)]);
        
            // execute if true
            return true;
        }

        // method show data todo
        function showALl(): array
        {
            return $this->todolist;
        }
    }
    
}
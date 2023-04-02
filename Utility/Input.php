<?php

namespace Utility{
    class Input{
        // create method for input user
        static function input(string $info){
            echo "$info : " . PHP_EOL;

            $result = fgets(STDIN);
            return trim($result);
        }
    }
}
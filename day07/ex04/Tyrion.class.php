<?php

class Tyrion{
    function sleepWith($t){
        if ($t instanceof Jaime)
           print("Not even if I'm drunk !".PHP_EOL);
        else if ($t instanceof Sansa)
            print("Let's do this.".PHP_EOL);
        else if ($t instanceof Cersei)
            print("Not even if I'm drunk !".PHP_EOL);
    }
}

?>
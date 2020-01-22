<?php

class Jaime{
    function sleepWith($j){
        if ($j instanceof Tyrion)
           print("Not even if I'm drunk !".PHP_EOL);
        else if ($j instanceof Sansa)
            print("Let's do this.".PHP_EOL);
        else if ($j instanceof Cersei)
            print("With pleasure, but only in a tower in Winterfell, then.".PHP_EOL);
    }
}
?>
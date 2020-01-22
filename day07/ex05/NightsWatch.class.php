<?php
    class NightsWatch implements IFighter{

        private $vars = array();

        function recruit($name){
           $this->vars[] = $name;
        }

        function fight(){
            foreach ($this->vars as $name)
            {
                if (method_exists(get_class($name), 'fight'))
                    $name->fight();
            }
       }  
    }
?>
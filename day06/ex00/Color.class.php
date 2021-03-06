<?php
    class Color
    {
        public $red;
        public $green;
        public $blue;
        static $verbose = false;
        
        public static function doc()
        {
            $read = fopen("Color.doc.txt", 'r');
            while ($read && !feof($read))
                echo fgets($read);
            echo "\n";
        }
        public function __construct($color)
        {
            if (isset($color['red']) && isset($color['green']) && isset($color['blue'])) {
                $this->red = intval($color['red']);
                $this->green = intval($color['green']);
                $this->blue = intval($color['blue']);
            } else if (isset($color['rgb'])) {
                $rgb = intval($color["rgb"]);
                $this->red = ($rgb >> 16) & 0xFF;
                $this->green = ($rgb >> 8) & 0xFF; 
                $this->blue = $rgb & 0xFF;  

            }
            if (Self::$verbose)
                printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
        }
        function __destruct()
        {
            if (Self::$verbose)
                printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
        }
        public function add($Color)
        {
            return (new Color(array('red' => $this->red + $Color->red, 'green' => $this->green + $Color->green, 'blue' => $this->blue + $Color->blue)));
        }
        public function sub($Color)
        {
            return (new Color(array('red' => $this->red - $Color->red, 'green' => $this->green - $Color->green, 'blue' => $this->blue - $Color->blue)));
        }
        public function mult($mult)
        {
            return (new Color(array('red' => $this->red * $mult, 'green' => $this->green * $mult, 'blue' => $this->blue * $mult)));
        }
        function __toString()
        {
            return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )", array($this->red, $this->green, $this->blue)));
        }
    }
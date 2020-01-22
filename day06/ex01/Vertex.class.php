
<?php
    require_once('../ex00/Color.class.php');
    class Vertex
    {
        private $_x;
        private $_y;
        private $_z;
        private $_w = 1;
        private $_color;
        static $verbose = false;

        public static function doc()
        {
            $read = fopen("Vertex.doc.txt", 'r');
            while ($read && !feof($read))
                echo fgets($read);
            echo "\n";
        }

        public function __construct($axis)
        {
            $this->_x = $axis['x'];
            $this->_y = $axis['y'];
            $this->_z = $axis['z'];
            if (isset($axis['w']) && !empty($axis['w']))
                $this->_w = $axis['w'];
            if (isset($axis['color']) && !empty($axis['color']) && $axis['color'] instanceof Color) {
                $this->_color = $axis['color'];
            } else {
                $this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
            }
            if (Self::$verbose)
                printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
        }
        function __destruct()
        {
            if (Self::$verbose)
                printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
        }
        function __toString()
        {
            if (Self::$verbose)
                return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) )", array($this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue)));
            return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f )", array($this->_x, $this->_y, $this->_z, $this->_w)));
        }       
    }
?>
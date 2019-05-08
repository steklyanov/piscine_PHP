<?php
class Color
{
    public $red = 0;
    public $green = 0;
    public $blue = 0;

    function __construct(array $kwargs)
    {
        if (array_key_exists('rgb', $kwargs))
        {
            $this->red = ($kwargs['rgb'] >> 16) % 256;
            $this->green = ($kwargs['rgb'] >> 8) % 256;
            $this->blue = $kwargs['rgb'] % 256;
        }
        if (array_key_exists('red', $kwargs))
            $this->red = $kwargs['red'] % 256;
        if (array_key_exists('green', $kwargs))
            $this->green = $kwargs['green'] % 256;
        if (array_key_exists('blue', $kwargs))
            $this->blue = $kwargs['blue'] % 256;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }

}



new Color( array( 'red' => 255, 'green' => 255, 'blue' => 255 ) );
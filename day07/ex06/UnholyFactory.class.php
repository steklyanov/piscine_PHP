<?php
class UnholyFactory
{
    private $army = array();
    function absorb($obj)
    {
        if (!in_array($obj, $this->army))
        {
            $this->army[] = $obj;
            print "(Factory absorbed a fighter of type ".$obj->f_name.")".PHP_EOL;
        }
        else
            print "(Factory already absorbed a fighter of type ".$obj->f_name.")".PHP_EOL;

    }
    function fabricate($name)
    {
        foreach ($this->army as $fighter) {
            if ($fighter->f_name == $name)
            {
                print "(Factory fabricate a fighter of type ".$fighter->f_name.")".PHP_EOL;
                return $fighter;
            }

        }
        return null;
    }
}
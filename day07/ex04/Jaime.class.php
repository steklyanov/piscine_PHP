<?php

class Jaime extends Lannister
{
    function sleepWith($lover)
    {
        if (is_a($lover, "Cersei"))
            echo "With pleasure, but only in a tower in Winterfell, then.\n";
        else if (is_a($lover, "Lannister"))
            echo "Not even if I'm drunk !\n";
        else
            echo "Let's do this.\n";
    }
}
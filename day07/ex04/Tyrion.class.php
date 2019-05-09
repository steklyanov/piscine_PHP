<?php
class Tyrion extends Lannister {
    public function sleepWith($lover) {
        if (is_a($lover,'Lannister'))
            print "Not even if I'm drunk !" . PHP_EOL;
        else
            print "Let's do this." . PHP_EOL;
    }
}

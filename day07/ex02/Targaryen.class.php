<?php

class Targaryen {
    public function getBurned() {
        if (method_exists($this, 'resistsFire'))
            return ('emerges naked but anharmed');
        else
            return ('burned alive');
    }
}
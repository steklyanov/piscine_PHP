<?php

class NightsWatch {
    public $arr = array();
    public function recruit($fighter) {
        if (method_exists($fighter, 'fight'))
            $this->arr[] = $fighter;
    }
    public function fight() {
        foreach ($this->arr as $item)
            $item->fight();
    }
}
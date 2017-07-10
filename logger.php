<?php

class Logger {
    public function log($message) {
        $this->saveToFile($message);
    }
}
/**
 * Created by PhpStorm.
 * User: Titar
 * Date: 10.07.2017
 * Time: 15:23
 */ 
<?php

class FileLogger implements ILogger{

    private function saveToFile($message) {

    }

    public function log($message) {
        $this->saveToFile($message);
    }
}

class DBLogger implements ILogger {

    private function saveToDB($message) {

    }

    public function log($message) {
        $this->saveToDB($message);
    }
}
/**
 * Created by PhpStorm.
 * User: Titar
 * Date: 10.07.2017
 * Time: 15:23
 */ 
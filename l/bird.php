<?php

class Bird {
    public function fly() {
        $flySpeed = 10;
        return $flySpeed;
    }
}

class Duck extends Bird {
    public function fly() {
        $flySpeed = 8;
        return$flySpeed;
    }

    public function swim() {
        $swimSpeed = 2;
        return $swimSpeed;
    }
}

class Penguin extends  Bird {
    public function fly() {
        return 'I can\'t fly ((';
    }

    public function swim() {
        $swimSpeed = 4;
        return $swimSpeed;
    }
}

/**
 * Created by PhpStorm.
 * User: Titar
 * Date: 10.07.2017
 * Time: 15:23
 */ 
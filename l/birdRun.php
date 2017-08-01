<?php

class BirdRun {
    private $bird;
    public function  __construct(Bird $bird) {
        $this->bird = $bird;
    }

    public function run() {
        $flySpeed = $this->bird->fly();
    }
}
/**
 * Created by PhpStorm.
 * User: Titar
 * Date: 01.08.2017
 * Time: 18:17
 */ 
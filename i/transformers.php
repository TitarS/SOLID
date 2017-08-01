<?php

class SuperTransformer implements ICarTransformer, IPlaneTransformer, IShipTransformer {
    public function toCar() {
        echo 'transform to car';
    }

    public function toPlane() {
        echo 'transform to plane';
    }

    public function toShip() {
        echo 'transform to ship';
    }
}

class CarTransformer implements ICarTransformer {
    public function toCar() {
        echo 'transform to car';
    }
/*    public function toPlane() {
        throw new Exception ('I can\'t transform to plane');
    }

    public function toShip() {
        throw new Exception ('I can\'t transform to ship');
    }*/
}
/**
 * Created by PhpStorm.
 * User: Titar
 * Date: 01.08.2017
 * Time: 18:44
 */ 
<?php

class Product {

    private $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function setPrice($price) {
		try {
			//save price in database
		}
		catch (Dbexception $e) {

		}
	}
}
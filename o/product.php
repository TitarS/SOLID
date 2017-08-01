<?php

class Product {

    private $logger;

    public function __construct(ILogger $logger) {
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
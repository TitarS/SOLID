<?php

$logger = new DBLogger();
$product = new Product($logger);
$product->setPrice(10);
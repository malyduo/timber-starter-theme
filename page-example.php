<?php
/*
Template Name: Example Page Template
*/

use Ber\Controller\ExampleController;

$controller = new ExampleController();
echo $controller->index();
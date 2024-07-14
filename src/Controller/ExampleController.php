<?php

namespace Ber\Controller;

use Ber\Bundle\Framework\AbstractController;

class ExampleController extends AbstractController {
    public function index(): string {
        $context = $this->context();

        return $this->render('page-example.twig', $context);
    }
}
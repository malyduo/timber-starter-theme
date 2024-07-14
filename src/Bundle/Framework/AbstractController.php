<?php

namespace Ber\Bundle\Framework;

use Timber\Timber;

abstract class AbstractController {

    protected function context(): array {
        return Timber::context();
    }

    protected function render(string $view, array $parameters = []): string {
        return Timber::compile($view, $parameters);
    }
}
<?php

namespace Ber\Core;

use Ber\Bundle\RegisterInterface;

class ClearWordpress implements RegisterInterface
{

    public function register(): void
    {
//        add_action('init', [$this, 'disableGutenbergBlocks'], 9999);
    }

    public function disableGutenbergBlocks(): void
    {

    }
}
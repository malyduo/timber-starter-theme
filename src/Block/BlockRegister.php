<?php

namespace Ber\Block;

use Ber\Block\Blocks\Example;
use Ber\Bundle\RegisterInterface;

class BlockRegister implements RegisterInterface
{
    public function register(): void
    {
        add_action('acf/init', [$this, 'createBlocks']);
    }

    public function createBlocks(): void
    {
        if (function_exists('acf_register_block_type')) {
            Example::add();
        }
    }
}
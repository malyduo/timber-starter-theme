<?php

namespace Ber\Acf;

use Ber\Acf\Groups\BlockExample;
use Ber\Bundle\RegisterInterface;

class AcfRegister implements RegisterInterface
{

    public function register(): void
    {
        add_action('acf/init', [$this, 'createAcfGroups']);
    }

    public function createAcfGroups(): void
    {
        if (function_exists('acf_add_local_field_group')) {
            BlockExample::add();
        }
    }
}
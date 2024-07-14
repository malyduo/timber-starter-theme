<?php

namespace Ber\CustomPostType;

use Ber\Bundle\RegisterInterface;
use Ber\CustomPostType\Types\ExamplePostType;

class CustomPostTypeRegister implements RegisterInterface
{

    public function register(): void
    {
        new ExamplePostType();
    }
}
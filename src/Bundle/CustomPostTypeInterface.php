<?php

namespace Ber\Bundle;

interface CustomPostTypeInterface
{
    public function createPostType(): void;
    public function createPostTypeTaxonomy(): void;
}
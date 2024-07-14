<?php

namespace Ber\Bundle;

interface BlockInterface
{
    public static function add(): void;

    public static function renderBlock($block, $content = '', $is_preview = false, $post_id = 0): void;
}
<?php

namespace Ber\Core;

use Ber\Bundle\RegisterInterface;

class Enqueue implements RegisterInterface
{

    public function register(): void
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueueFront'], 999999);
    }

    public function enqueueFront(): void
    {
        wp_enqueue_script(
            'main-js',
            get_template_directory_uri() . '/public/dist/js/main.min.js',
            ['jquery'],
            time(),
            true
        );
        wp_enqueue_style('main-css', get_template_directory_uri() . '/public/dist/css/style.min.css', [], time());
    }
}
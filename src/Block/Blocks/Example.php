<?php

namespace Ber\Block\Blocks;

use Ber\Bundle\BlockInterface;
use Timber\Timber;

class Example implements BlockInterface
{
    public static function add(): void
    {
        acf_register_block_type([
            'name' => 'example_block',
            'title' => __('Example Block'),
            'description' => __('A custom example block.'),
            'render_callback' => [self::class, 'renderBlock'],
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => ['example'],
        ]);
    }

    public static function renderBlock($block, $content = '', $is_preview = false, $post_id = 0): void
    {
        $context = Timber::context();

        $context['block'] = $block;
        $context['content'] = $content;
        $context['is_preview'] = $is_preview;
        $context['post_id'] = $post_id;

        $context['fields'] = get_fields();

        Timber::render('blocks/block-example.twig', $context);
    }
}
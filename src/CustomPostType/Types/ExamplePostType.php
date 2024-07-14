<?php

namespace Ber\CustomPostType\Types;

use Ber\Bundle\CustomPostTypeInterface;

class ExamplePostType implements CustomPostTypeInterface
{
    private $postTypeName = 'Example CPT';
    private $postTypeSlug = 'example-cpt';
    private $postTypeIcon = 'dashicons-admin-post';

    public function __construct()
    {
        add_action('init', [$this, 'createPostType']);
        add_action('init', [$this, 'createPostTypeTaxonomy']);
    }

    public function createPostType(): void
    {
        $args = array(
            'label' => __($this->postTypeName, 'ber'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_rest' => true,
            'query_var' => true,
            'menu_position' => 31,
            'supports' => ['title'],
            'has_archive' => true,
            'rewrite' => [
                'with_front' => true,
                'slug' => $this->postTypeSlug
            ],
            'capability_type' => 'post',
            'menu_icon' => $this->postTypeIcon
        );
        register_post_type($this->postTypeSlug, $args);
    }

    public function createPostTypeTaxonomy(): void
    {
        $args = array(
            'label' => __('Kategoria', 'ber'),
            'public' => true,
            'rewrite' => false,
            'hierarchical' => true
        );

        register_taxonomy('example-cpt-category', $this->postTypeSlug, $args);
    }
}
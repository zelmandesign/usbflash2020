<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class ProductList extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'page-tech-gifts',
        'page-usb-sticks',
        'partials.product.single'
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'usbdrivesQuery' => $this->usbdrivesQuery(),
            'gadgetsQuery' => $this->gadgetsQuery()
        ];
    }

    /**
     * Gadgets Query
     *
     * @return array
     */
    public function gadgetsQuery()
    {
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'gadgets-product',
            'page' => $paged,
            'posts_per_page' => 1
        );
        $result = new \WP_Query($args);

        $data = array_map(
            function ($post) {
                return array(
                    'title'     => $post->post_title,
                    'post_id'   => $post->ID,
                    'post_type' => $post->post_type,
                );
            },
            $result->posts
        );
        return $data;
    }

    /**
     * USB Drives Query
     *
     * @return array
     */
    public function usbdrivesQuery()
    {
        $args = array(
            'post_type' => 'usb-product',
        );
        $result = new \WP_Query($args);

        $data = array_map(
            function ($post) {
                return array(
                    'title'     => $post->post_title,
                    'post_id'   => $post->ID,
                    'post_type' => $post->post_type,
                );
            },
            $result->posts
        );
        return $data;
    }
}

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
        'page-gadgets-tech',
        'page-usb-drives',
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
            'gadgetsQuery' => $this->gadgetsQuery(),
            'boboFruit' => $this->boboFruit(),
        ];
    }

    /**
     * Gadgets Query
     *
     * @return array
     */
    public function gadgetsQuery()
    {
        $args = array(
            'post_type' => 'gadgets-product',
            'posts_per_page'=>'10',
        );
        $result = new \WP_Query($args);

        $data = array_map(
            function ($post) {
                return array(
                    'title'   => $post->post_title,
                );
            },
            $result->posts
        );
        return $data;
    }

    /**
     * Gadgets Query
     *
     * @return array
     */
    public function usbdrivesQuery()
    {
        $args = array(
            'post_type' => 'usb-product',
            'posts_per_page'=>'10',
        );
        $result = new \WP_Query($args);

        $data = array_map(
            function ($post) {
                return array(
                    'title'   => $post->post_title,
                );
            },
            $result->posts
        );
        return $data;
    }

    public function boboFruit()
    {
        $bobo = 'dhsajhdahjadshkhaks';
        return $bobo;
    }
}

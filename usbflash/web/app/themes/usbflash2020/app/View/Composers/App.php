<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'boboFruit' => $this->boboFruit(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    /**
     * Gadgets Query
     *
     * @return string
     */
    public function fooBar()
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
     * Returns the site name.
     *
     * @return string
     */
    public function boboFruit()
    {
        return 'tomek';
    }
}

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
            'pagiNation' => $this->pagiNation()
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
     * Returns the site name.
     *
     * @return void
     */
    public function pagiNation()
    {
        global $wp_query;
        $paged = !empty($wp_query->query_vars['paged']) ? $wp_query->query_vars['paged'] : 1;
        $prev_posts = ( $paged - 1 ) * $wp_query->query_vars['posts_per_page'];
        $from = 1 + $prev_posts;
        $to = count($wp_query->posts) + $prev_posts;
        $of = $wp_query->found_posts;
    }
}

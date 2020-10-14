<?php

namespace App\Providers;

use Roots\Acorn\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        echo 'bobo';
    }

    /**
     * Primary Nav Menu arguments
     * @return array
     */
    public function boostrapNav()
    {
        $args = array(
        'theme_location'    => 'primary_navigation',
        'menu_class'        => 'collapse navbar-collapse',
        'walker'            => new \App\Providers\wp_bootstrap4_navwalker(),
        );
        return $args;
    }
}

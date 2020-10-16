<header class="banner navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">

    <a class="navbar-brand" href="{{ home_url('/') }}">
      @if (has_custom_logo())
        {!! the_custom_logo(); !!} 
      @else
        {{ $siteName }}
      @endif
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      @include('forms.search')
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto']) !!}
      @endif
    </div>
    
  </div>
</header>

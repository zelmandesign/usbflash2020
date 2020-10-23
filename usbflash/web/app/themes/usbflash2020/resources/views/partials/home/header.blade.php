<header class="banner navbar navbar-expand-md navbar-dark">
  <div class="container">

    <a class="navbar-brand" href="{{ home_url('/') }}">
      <img src="@asset('images/USB-Flash-Logo-White.svg')" alt="USBflash.co.uk" width="93" height="76">
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

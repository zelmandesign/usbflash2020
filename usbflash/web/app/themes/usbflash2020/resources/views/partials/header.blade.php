<header class="banner navbar navbar-expand-lg pt-5 pb-3 d-none d-xl-block @if(is_front_page()) navbar-dark @else navbar-light @endif">
  <div class="container">
    
    <a class="navbar-brand" href="{{ home_url('/') }}">
      @if(is_front_page())
        <img src="@asset('images/USB-Flash-Logo-White.svg')" alt="USBflash.co.uk" width="93" height="76">
      @else 
        <img src="@asset('images/USB-Flash-Logo-Colour.svg')" alt="USBflash.co.uk" width="93" height="76">
      @endif
    </a>

    <div class="collapse desktop navbar-collapse" id="navbarCollapse">
      @include('forms.search')
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto']) !!}
      @endif
    </div>

  </div>
</header>

<header class="banner navbar navbar-expand-xl pb-3 d-block d-xl-none @if(is_front_page()) navbar-dark @else navbar-light @endif">
  <div class="container">
    
    <a class="navbar-brand" href="{{ home_url('/') }}">
      @if(is_front_page())
        <img src="@asset('images/USB-Flash-Logo-White.svg')" alt="USBflash.co.uk" width="93" height="76">
      @else 
        <img src="@asset('images/USB-Flash-Logo-Colour.svg')" alt="USBflash.co.uk" width="93" height="76">
      @endif
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <div id="nav-icon3">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      @if (has_nav_menu('mobile_navigation'))
        {!! wp_nav_menu(['theme_location' => 'mobile_navigation', 'menu_class' => 'navbar-nav ml-auto']) !!}
      @endif
    </div>

  </div>
</header>

<div class="menu-overlay"> &nbsp;</div>

<section class="hero-product">
  <div class="prod-bg-wrapper" style="background: url('@field('archive_hero_background_image')') center center no-repeat;">
    <div class="container">
      @if(function_exists('yoast_breadcrumb')) 
        {{ yoast_breadcrumb('<p id="breadcrumbs">','</p>') }}
      @endif

      <div class="page-header">
        <h1>{!! $title !!}</h1>
      </div>
    </div>
  </div>
</section>

<section class="hero-product hero-category">
  <div class="prod-bg-wrapper" style="background: url('@field('archive_hero_background_image')') top center no-repeat;">
    <div class="container">
      @if(function_exists('yoast_breadcrumb')) 
        {{ yoast_breadcrumb('<p id="breadcrumbs" class="pt-5 pb-5">','</p>') }}
      @endif
      <div class="row">
        <div class="col-md-4">
          <div class="hero-prod-heading mb-4">
            @field('hero_prod_heading')
          </div>
          @field('hero_prod_verbiage')
        </div>
      </div>
    </div>
  </div>
</section>

<section class="hero-tax hero-category">
  <div class="hero-tax-wrapper">
    <div class="container">
      @if(function_exists('yoast_breadcrumb')) 
        {{ yoast_breadcrumb('<p id="breadcrumbs" class="pt-5 pb-5">','</p>') }}
      @endif
      <div class="row">
        <div class="col-md-5">
          @php echo category_description( get_category_by_slug('category-slug')->term_id ); @endphp
        </div>
        <div class="col-md text-md-center text-left d-flex align-items-md-end justify-content-md-end mt-5 mt-md-0 pb-3 mb-md-0">
          <a href="https://uk.trustpilot.com/review/www.usbflash.co.uk" target="_blank"><img src="@asset('images/Trust.svg')" alt="" width="218px" height="102px" class="trust-pilot"></a>
        </div>
      </div>
    </div>
  </div>
</section>

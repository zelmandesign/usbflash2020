<section class="home-browse">
  <div class="container">
    <div class="text-center mt-5 mb-5">
      @hasfield('our_prod_heading')
        <div class="hero-heading">@field('our_prod_heading')</div>
      @endfield
      @hasfield('our_prod_subheading')
        <div class="sub-heading">@field('our_prod_subheading')</div>
      @endfield
    </div>

    @hasfield('products')
      <div class="row mb-md-5">
        @fields('products')
          <div class="col-md-4 mb-md-5 mb-3">
            <div class="row mb-3 mb-md-0">
              <div class="col-2"><img src="@sub('product_icon', 'url')" alt="@sub('product_icon', 'alt')"></div>
              <div class="col-9 pr-md-5">
                <div class="text-bold">@sub('product_name')</div> 
                @sub('product_description')
              </div>
            </div>
          </div>
        @endfields
      </div>
    @endfield
  </div>
</section>

@group('spotlight_product')
  <section class="home-spotlight" style="background: url('@field('home_spotlight_bg_image')') center center no-repeat;">
    <div class="container pt-md-5">
      <div class="row">
        @hassub('product_image')
        <div class="col-md text-center">
          <div class="splat-wrapper">
            <img src="@sub('product_image', 'url')" alt="@sub('product_image', 'alt')" width="400" height="auto" class="home-product">
            <img src="@asset('images/Featured-Promotional-Splat.svg')" alt="" width="820" height="513" class="splat-bg">
          </div>
        </div>
        @endsub
        <div class="col-md home-spotlight-text d-flex align-items-center pt-md-5 pl-md-5">
          <div class="text-wrapper pt-md-5 pl-md-5">
            @hassub('heading')
              <div class="hero-heading">@sub('heading')</div>
            @endsub
            @hassub('product_name')
              <div class="sub-heading">@sub('product_name')</div>
            @endsub
            @hassub('product_description')
              <div class="mt-2 mb-4">
                @sub('product_description')
              </div>
            @endsub
            @group('button')
              @hassub('link')
                <a href="@sub('link')" class="btn btn-outline-danger">@sub('text')</a>
              @endsub
            @endgroup
          </div>
        </div>
      </div>
    </div>
  </section>
@endgroup

<section class="home-featured product-list">
  <div class="container">
    <div class="hero-heading">FEATURED TECH</div>
    <div class="sub-heading">Check out what's popular</div>
    <div class="bt-line mb-5"></div>

    @php
      $post_type = array('usb-product', 'gadgets-product');
      $args = array(
        'posts_per_page' => 12,
        'post_type' => $post_type,
        'tax_query' => array(
          'relation' => 'OR',
          array(
            'taxonomy' => 'gadgets-category',
            'field' => 'name',
            'terms' => 'featured'
          ),
          array(
            'taxonomy' => 'usb-category',
            'field' => 'name',
            'terms' => 'featured'
          )
        )
      );
      $featured_query = new \WP_Query($args)
    @endphp

    @if (! $featured_query->have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no products were found.', 'sage') }}
      </div>
    @endif

    <div class="row mb-4 product-list">
      @while($featured_query->have_posts()) @php($featured_query->the_post())
        @include('partials.product.single-tax')
      @endwhile

      @php(wp_reset_postdata())
    </div>
    
  </div>
</section>

<section class="home-work-with-us d-flex align-items-center" style="background: url('@field('home_work_with_us_bg_image')') center center no-repeat;">
  <div class="container">
    <div class="hero-heading mb-3">WORK WITH US</div>

    <div class="row">
      <div class="col-md-5">
        <div class="sub-heading">Experts in high tech promotional gadgets & USB sticks</div>
        We are a leading UK supplier of branded USB drives and mobile accessories to the promotional industry. We are an innovative company with a fresh approach to the promotional world and are always introducing new promotional gadgets, which now also includes a range of Power Banks, Charging Cables and Wireless Chargers.
      </div>
      <div class="col-md-6 offset-md-1">
        <div class="row mb-5">
          <div class="col-md pr-md-5">
            <div class="text-bold d-flex"> <img src="@asset('images/Promotional-Tick-Box.svg')" class="mr-2" width="25" height="25"> UK Delivery</div>
            All of our promotional USB drives and branded tech benefit from free UK delivery.
          </div>
          <div class="col-md pr-md-5">
            <div class="text-bold d-flex"> <img src="@asset('images/Promotional-Tick-Box.svg')" class="mr-2" width="25" height="25"> 12 Month Warranty</div>
            For peace of mind all of our promotional gifts come with a 12 month warranty.
          </div>
        </div>

        <div class="row">
          <div class="col-md pr-md-5">
            <div class="text-bold d-flex"> <img src="@asset('images/Promotional-Tick-Box.svg')" class="mr-2" width="25" height="25"> Free logo branding</div>
            Get maximum brand exposure for you logo with our free branding service.
          </div>
          <div class="col-md pr-md-5">
            <div class="text-bold d-flex"> <img src="@asset('images/Promotional-Tick-Box.svg')" class="mr-2" width="25" height="25"> Lowest prices</div>
            Affordable low cost promotional gadgets without comprising on quality.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="home-help d-flex align-items-center" style="background: url('@field('home_help_bg_image')') center center no-repeat;">
  <div class="home-help-wrapper text-center">
    <div class="sub-heading">Need help <span class="text-bold">sourcing</span> a promotional gift for your next event?</div>
    We have over i20+ years experience within the promotional sector, so we like to think we know a thing or two about promotional gifts. Whilst primarily specialists in branded usb sticks and promotional technology, we often have direct contact with factories who manufacture a range of different products. So if your looking for a promotional gift that isn't featured on our site please get in touch and we will do our best to try and source it for you.
    <div class="hero-heading">Give us a call on 0845 230 0395</div>
  </div>
</section>
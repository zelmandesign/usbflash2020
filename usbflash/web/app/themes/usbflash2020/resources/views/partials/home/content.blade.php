<section class="home-browse">
  <div class="container">
    <div class="text-center mt-5 mb-5">
      <div class="hero-heading">Browse</div>
      <div class="sub-heading">our products</div>
    </div>

    <div class="row mb-5">
      <div class="col-md">
        <div class="row">
          <div class="col-2"><img src="@asset('images/Branded-USB-Drive-Icon.svg')" alt=""></div>
          <div class="col-9 pr-md-5">
            <div class="text-bold">Branded USB sticks</div> 
            Promotional USB drives in a range of memory sizes. Get your logo branded free of charge.
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="row">
          <div class="col-2"><img src="@asset('images/Branded-USB-Drive-Icon.svg')" alt=""></div>
          <div class="col-9 pr-md-5">
            <div class="text-bold">Wireless charging</div> 
            Charge your mobile wirelessly with our brand new range of branded Wireless Chargers
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="row">
          <div class="col-2"><img src="@asset('images/Branded-USB-Drive-Icon.svg')" alt=""></div>
          <div class="col-9 pr-md-5">
            <div class="text-bold">Power Banks</div> 
            Make sure your battery never dies again with our range of promotional power banks
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md">
        <div class="row">
          <div class="col-2"><img src="@asset('images/Branded-USB-Drive-Icon.svg')" alt=""></div>
          <div class="col-9 pr-md-5">
            <div class="text-bold">USB charging cables</div> 
            Charge multiple devices with a single cable with our range of branded USB charging cables.
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="row">
          <div class="col-2"><img src="@asset('images/Branded-USB-Drive-Icon.svg')" alt=""></div>
          <div class="col-9 pr-md-5">
            <div class="text-bold">Webcam Covers</div> 
            Get your brand right in front of the customer with our branded webcam covers.
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="row">
          <div class="col-2"><img src="@asset('images/Branded-USB-Drive-Icon.svg')" alt=""></div>
          <div class="col-9 pr-md-5">
            <div class="text-bold">Gadgets</div> 
            A great range of promotional gadgets including selfie sticks, Bluetooth keyrings.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="home-spotlight" style="background: url('@field('home_spotlight_bg_image')') center center no-repeat;">
  <div class="container pt-md-5">
    <div class="row">
      <div class="col-md text-center">
        <div class="splat-wrapper">
          <img src="@asset('images/Hanger-USB-Drive-Open.png')" alt="" width="400" height="auto" class="home-product">
          <img src="@asset('images/Featured-Promotional-Splat.svg')" alt="" width="820" height="513" class="splat-bg">
        </div>
      </div>
      <div class="col-md home-spotlight-text d-flex align-items-center pt-md-5 pl-md-5">
        <div class="text-wrapper pt-md-5 pl-md-5">
          <div class="hero-heading">SPOTLIGHT</div>
          <div class="sub-heading">Hanger USB Drive</div>
          <div class="mt-2 mb-4">
            These super sleek USB drives are manufactured using using zinc alloy giving them a premium look and feel. A large branding area means we can laser engrave or print your logo for everyone to see. A great promotional USB stick without the expensive price tag!
          </div>
          <div class="btn btn-outline-danger">More Info</div>
        </div>
      </div>
    </div>
  </div>
</section>

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
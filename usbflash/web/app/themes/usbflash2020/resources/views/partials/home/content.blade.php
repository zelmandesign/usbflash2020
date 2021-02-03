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
          <div class="col-md-4 mb-md-5 mb-5 pb-5">
            <div class="row mb-3 mb-md-0">
              <div class="col-xl-3 text-center text-xl-left mb-2 prod-icon-wrapper d-flex justify-content-center ">
                <a href="@sub('product_url')">
                  <img src="@sub('product_icon_rollover', 'url')" alt="@sub('product_icon_rollover', 'alt')" class="img-fluid product_icon_rollover">
                  <img src="@sub('product_icon', 'url')" alt="@sub('product_icon', 'alt')" class="img-fluid product_icon">
                </a>
              </div>
              <div class="col-xl-8 text-center text-xl-left pr-xl-5 pl-5 pr-5 pl-xl-0">
                <a href="@sub('product_url')"><h2 class="text-bold">@sub('product_name')</h2></a>
                <a href="@sub('product_url')"><div class="home_prod_desc">@sub('product_description')</div></a>
              </div>
            </div>
          </div>
        @endfields
      </div>
    @endfield
  </div>
</section>

@group('spotlight_product')
  <section class="home-spotlight mb-5 mb-md-0 pt-5" style="background: url('@field('home_spotlight_bg_image')') center center no-repeat;">
    <div class="container pt-5">
      <div class="row">
        @hassub('product_image')
        <div class="col-md-6 text-center splat-mobile d-flex align-items-center justify-content-center">
          <div class="splat-wrapper">
            <img src="@sub('product_image', 'url')" alt="@sub('product_image', 'alt')" width="auto" height="auto" class="home-product img-fluid">
          </div>
        </div>
        @endsub
        <div class="col-md home-spotlight-text d-flex align-items-center">
          <div class="text-wrapper pl-md-5">
            @hassub('heading')
              <h3 class="hero-heading">@sub('heading')</h3>
            @endsub
            @hassub('product_name')
              <div class="sub-heading">
                We create
                <div class="text-dark bg-white">
                  promotional tech
                </div>
                that makes your
                brand <span class="text-blue">stand out</span>
              </div>
            @endsub
            @hassub('product_description')
              <div class="mt-2 mb-4">
                @sub('product_description')
              </div>
            @endsub
          </div>
        </div>
      </div>
    </div>
  </section>
@endgroup

<section class="home-featured product-list">
  <div class="container">
    <div class="featured-wrapper">
      @hasfield('featured_heading')
        <h3 class="hero-heading">@field('featured_heading')</h3>
      @endfield
      @hasfield('featured_subheading')
        <div class="sub-heading mb-3">@field('featured_subheading')</div>
      @endfield
      @hasfield('featured_verbiage')
        <div class="verbiage">
          @field('featured_verbiage')
        </div>
      @endfield
      <div class="bt-line mb-5"></div>
    </div>
    
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

<section class="home-work-with-us d-flex align-items-center bg-danger" style="background: url('@field('home_work_with_us_bg_image')') center center no-repeat;">
  <div class="container text-center text-md-left">
    @hasfield('work_heading')
      <div class="hero-heading mb-3">@field('work_heading')</div>
    @endfield

    <div class="row">
      <div class="col-md-5">
        @hasfield('work_subheading')
          <h2 class="sub-heading">@field('work_subheading')</h2>
        @endfield
        <div class="mb-5">
          @field('work_text')
        </div>
      </div>
      <div class="col-md-6 offset-md-1">
        @hasfield('work_paragraphs')
          <div class="row mb-5">
            @fields('work_paragraphs')
              <div class="col-md-6 pr-md-5 mb-5">
                <div class="row">
                  <div class="col-md-1 pb-2">
                    <img src="@asset('images/Promotional-Tick-Box.svg')" width="25" height="25">
                  </div>
                  <div class="col-md">
                    <div class="text-bold ml-md-1">@sub('heading')</div>  
                  </div>
                </div>
                <div class="pl-5 pl-md-0 pr-5 pr-md-0">
                  @sub('text')
                </div>
                
              </div>
            @endfields
          </div>
        @endfield
      </div>
    </div>
  </div>
</section>

<section class="home-help d-flex align-items-center" style="background: url('@field('home_help_bg_image')') center center no-repeat;">
  <div class="home-help-wrapper text-center">
    @hasfield('work_heading')
      <h3 class="sub-heading">@field('help_heading')</h3>
    @endfield
    @field('help_text')
    <div class="hero-heading d-none d-md-block">@field('help_bottom_text')</div>
    <div class="hero-heading d-block d-md-none">@field('help_bottom_text_mobile')</div>
  </div>
</section>
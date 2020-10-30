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
  <section class="home-spotlight mb-5 mb-md-0" style="background: url('@field('home_spotlight_bg_image')') center center no-repeat;">
    <div class="container pt-md-5">
      <div class="row">
        @hassub('product_image')
        <div class="col-md text-center splat-mobile">
          <div class="splat-wrapper">
            <img src="@sub('product_image', 'url')" alt="@sub('product_image', 'alt')" width="400" height="auto" class="home-product">
            <img src="@asset('images/Featured-Promotional-Splat.svg')" alt="" width="820" height="513" class="splat-bg">
          </div>
        </div>
        @endsub
        <div class="col-md home-spotlight-text d-flex align-items-center pt-5 pl-md-5">
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
    @hasfield('featured_heading')
      <div class="hero-heading">@field('featured_heading')</div>
    @endfield
    @hasfield('featured_subheading')
      <div class="sub-heading">@field('featured_subheading')</div>
      <div class="bt-line mb-5"></div>
    @endfield

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
  <div class="container">
    @hasfield('work_heading')
      <div class="hero-heading mb-3">@field('work_heading')</div>
    @endfield

    <div class="row">
      <div class="col-md-5">
        @hasfield('work_subheading')
          <div class="sub-heading">@field('work_subheading')</div>
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
                <div class="text-bold d-flex"> <img src="@asset('images/Promotional-Tick-Box.svg')" class="mr-2" width="25" height="25"> @sub('heading')</div>
                @sub('text')
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
      <div class="sub-heading">@field('help_heading')</div>
    @endfield
    @field('help_text')
    <div class="hero-heading">@field('help_bottom_text')</div>
  </div>
</section>
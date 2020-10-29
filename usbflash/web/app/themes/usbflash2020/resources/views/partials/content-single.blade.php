<article @php(post_class())>
  @include('partials.page-header')

  <div class="container">
    <div class="row single-prod-top">
      <div class="col-md-7">
        <img src="@field('prod_hero_image', 'url')" alt="@field('prod_hero_image', 'alt')" class="img-fluid lozad prod-img-bg mb-4" />

        @hasfield('prod_thumbs')
          <div class="row">
            @fields('prod_thumbs')
              <div class="col">
                <img src="@sub('product_image', 'url')" alt="@sub('product_image', 'alt')" class="img-fluid lozad prod-img-bg" />
              </div>
            @endfields
          </div>
        @endfield

      </div>
      <div class="col-md pl-md-5">
        <h1 class="entry-title mb-4 mt-3">
          {!! $title !!}
        </h1>
        <div class="mb-4">
          @hasfield('prod_short_description')
            @field('prod_short_description')
          @endfield
        </div>

        @hasfield('paragraphs_&_icons')
          @fields('paragraphs_&_icons')
            <div class="row mb-4">
              <div class="col-2">
                <img src="@sub('icon', 'url')" alt="@sub('icon', 'alt')" class="img-fluid lozad mt-1" />  
              </div>
              <div class="col">
                @sub('verbiage')
              </div>
            </div>
          @endfields
        @endfield

        @include('partials.product.modal')
      </div>
    </div>

    <div class="row single-prod-bottom">
      <div class="col-md-5">
        <div class="hero-heading">
          @field('product_subheading')
        </div>
        @field('main_product_description')
        @hasfield('show_product_options')
          <div class="prod-options-title mb-4 mt-5">
            @field('prod_options_title')
          </div>

          @hasfield('prod_options')
            <div class="option-wrapper">
              @fields('prod_options')
                <div class="option d-flex justify-content-center align-items-center mr-3 mb-4">
                  @sub('option')
                </div>
              @endfields
            </div>
          @endfield

        @endfield
        
        @hasfield('colors')
        <div class="prod-colors">
          <div class="prod-options-title mt-2">
            Standard colours
          </div>
          <div class="colors">
            @if($colorsProd)
              @foreach ($colorsProd as $color)
                <div class="color {{ $color }} mr-2 mt-3"></div>
              @endforeach
            @endif
          </div>
          <small>Pantone match available on 500+</small>
        </div>
        @endfield

      </div>

      @hasfield('prod_icons')
        <div class="col-md offset-md-1">
          @fields('prod_icons')
            <div class="icons-wrapper prod-img-bg">
              <div class="row mb-5">
                <div class="col text-center">
                  <img src="@asset('images/Minimum-Order.svg')" alt="">
                  <div class="prod-options-title mt-2">Min Order</div>
                  <small>@sub('min_order')</small>
                </div>  
                <div class="col text-center">
                  <img src="@asset('images/Leadtime-Icon.svg')" alt="">
                  <div class="prod-options-title mt-2">Lead-time</div>
                  <small>@sub('lead_time')</small>
                </div>  
              </div>

              <div class="row mb-5">
                <div class="col text-center">
                  <img src="@asset('images/Print-Area-Icon.svg')" alt="">
                  <div class="prod-options-title mt-2">Print area</div>
                  <small>@sub('print_area')</small>
                </div>  
                <div class="col text-center">
                  <img src="@asset('images/Dimensions-Icon.svg')" alt="">
                  <div class="prod-options-title mt-2">Dimensions</div>
                  <small>@sub('dimensions')</small>
                </div>  
              </div>

              <div class="row">
                <div class="col text-center">
                  <img src="@asset('images/Branding-icon.svg')" alt="">
                  <div class="prod-options-title mt-2">Print Method</div>
                  <small>@sub('print_method')</small>
                </div>  
                <div class="col text-center">
                  <img src="@asset('images/Artwork-Guidelines-Download.svg')" alt="">
                  <div class="prod-options-title mt-2">Artwork</div>
                  <small>@sub('artwork')</small>
                </div>  
              </div>
              
            </div>
          @endfields
        </div>
      @endfield
    </div>
  </div>

</article>
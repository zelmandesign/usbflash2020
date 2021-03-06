<article @php(post_class())>
  @include('partials.page-header')

  <div class="container">
    <div class="row single-prod-top">
      <div class="col-md-7">
        <img src="@field('prod_hero_image', 'url')" alt="@field('prod_hero_image', 'alt')" class="img-fluid lozad prod-img-bg mb-4 hero-prod-image pr-2" />
        @hasfield('prod_thumbs')
          <div id="splide" class="splide">
            <div class="splide__track">
              <ul class="splide__list">
                @fields('prod_thumbs')
                  <li class="splide__slide">
                    <img src="@sub('product_image', 'url')" alt="@sub('product_image', 'alt')" class="img-fluid prod-img-bg thumb-prod-image" />
                  </li>
                @endfields
              </ul>
            </div>
          </div>
        @endfield
      </div>
      <div class="col-md pl-md-5 mt-2 mt-md-0">
        <h1 class="entry-title mb-4 pt-5 text-center text-md-left">
          {!! $title !!}
        </h1>
        <div class="mb-4 text-center text-md-left">
          @hasfield('prod_short_description')
            @field('prod_short_description')
          @endfield
        </div>

        <div class="d-none d-md-block">
          @hasfield('paragraphs_&_icons')
            @fields('paragraphs_&_icons')
              <div class="row mb-4 text-center text-md-left">
                <div class="col-md-2 mb-3 mb-md-0">
                  <img src="@sub('icon', 'url')" alt="@sub('icon', 'alt')" class="img-fluid mt-1" />  
                </div>
                <div class="col-md pl-5 pr-5 pl-md-0 pr-md-0">
                  <h2 class="prod_short_desc_title">@sub('title')</h2>
                  <div class="prod-verbiage">
                    @sub('verbiage')
                  </div>
                </div>
              </div>
            @endfields
          @endfield
        </div>
      
        @if(get_post_type(get_the_ID()) == "gadgets-product")
          @include('partials.product.modal-tech')
        @elseif(get_post_type(get_the_ID()) == "usb-product")
          @include('partials.product.modal-usb')
        @endif

        <div class="d-block d-md-none mt-5">
          @hasfield('paragraphs_&_icons')
            @fields('paragraphs_&_icons')
              <div class="row mb-4 text-center text-md-left">
                <div class="col-md-2 mb-3 mb-md-0">
                  <img src="@sub('icon', 'url')" alt="@sub('icon', 'alt')" class="img-fluid mt-1" />  
                </div>
                <div class="col-md pl-5 pr-5 pl-md-0 pr-md-0">
                  <h2 class="prod_short_desc_title">@sub('title')</h2>
                  <div class="prod-verbiage">
                    @sub('verbiage')
                  </div>
                </div>
              </div>
            @endfields
          @endfield
        </div>
      </div>
    </div>

    <div class="row single-prod-bottom">
      <div class="col-md-5 pb-4">
        <h3 class="hero-heading text-center text-md-left">
          @field('product_subheading')
        </h3>
        <span class="text-center text-md-left">
          @field('main_product_description')
        </span>
        
        <span class="text-center text-md-left">
          @hasfield('show_product_options')
            <h4 class="prod-options-title mb-4 mt-5">
              @field('prod_options_title')
            </h4>

            @hasfield('prod_options')
              <div class="option-wrapper">
                @fields('prod_options')
                <div class="col-4">
                  <div class="option d-flex justify-content-center align-items-center mb-4">
                    @sub('option')
                  </div>
                </div>
                  
                @endfields
              </div>
            @endfield

          @endfield
          
          @hasfield('colors')
          <div class="prod-colors mb-5 mb-md-0">
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
            <small>@field('colors_text')</small>
          </div>
          @field('text_under_colors')
          @endfield
        </span>
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
                  <img src="@asset('images/Branding-Icon.svg')" alt="" width="50" height="50">
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
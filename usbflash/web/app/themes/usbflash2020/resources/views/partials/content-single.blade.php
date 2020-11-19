<article @php(post_class())>
  @include('partials.page-header')

  <div class="container">
    <div class="row single-prod-top">
      <div class="col-md-7">
        <img src="@field('prod_hero_image', 'url')" alt="@field('prod_hero_image', 'alt')" class="img-fluid lozad prod-img-bg mb-4 hero-prod-image" />

        @hasfield('prod_thumbs')
          <div id="carouselDesktop" class="carousel slide d-none d-md-block" data-ride="carousel">
            <div class="carousel-inner">
              @php($desktop_item = 0)
              @php($desktop_item_number = 0)
              @php($desktop_count = count(get_field('prod_thumbs')))
              <div class="carousel-item active">
                <div class="row">
                  @fields('prod_thumbs') 
                    @php($desktop_item++) @php($desktop_item_number++)
                    
                      <div class="col-3 mb-4 mb-md-0">
                        <img src="@sub('product_image', 'url')" alt="@sub('product_image', 'alt')" class="img-fluid prod-img-bg thumb-prod-image" />
                      </div>
                    
                    @if($desktop_item % 4 == 0 && $desktop_count != $desktop_item_number) 
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row">
                      @php($desktop_item = 0)
                    @elseif($desktop_count == $desktop_item_number)
                      </div>
                    </div>
                    @endif
                  @endfields
            </div>
            
            <a class="carousel-control-prev" href="#carouselDesktop" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselDesktop" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div id="carouselMobile" class="carousel slide d-block d-md-none" data-ride="carousel">
            <div class="carousel-inner">
              @php($mobile_item = 0)
              @php($mobile_item_number = 0)
              @php($mobile_count = count(get_field('prod_thumbs')))
              <div class="carousel-item active">
                <div class="row">
                  @fields('prod_thumbs') 
                    @php($mobile_item++) @php($mobile_item_number++)
                    
                      <div class="col-4 mb-4 mb-md-0">
                        <img src="@sub('product_image', 'url')" alt="@sub('product_image', 'alt')" class="img-fluid prod-img-bg thumb-prod-image" />
                      </div>
                    
                    @if($mobile_item % 3 == 0 && $mobile_count != $mobile_item_number) 
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row">
                      @php($mobile_item = 0)
                    @elseif($mobile_count == $mobile_item_number)
                      </div>
                    </div>
                    @endif
                  @endfields
            </div>
            
            <a class="carousel-control-prev" href="#carouselMobile" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselMobile" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        @endfield

      </div>
      <div class="col-md pl-md-5">
        <h1 class="entry-title mb-4 mt-3 text-center text-md-left">
          {!! $title !!}
        </h1>
        <div class="mb-4 text-center text-md-left">
          @hasfield('prod_short_description')
            @field('prod_short_description')
          @endfield
        </div>

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

        @if(get_post_type(get_the_ID()) == "gadgets-product")
          @include('partials.product.modal-tech')
        @elseif(get_post_type(get_the_ID()) == "usb-product")
          @include('partials.product.modal-usb')
        @endif
        
      </div>
    </div>

    <div class="row single-prod-bottom">
      <div class="col-md-5 pb-4">
        <h3 class="hero-heading">
          @field('product_subheading')
        </h3>
        @field('main_product_description')
        @hasfield('show_product_options')
          <h4 class="prod-options-title mb-4 mt-5">
            @field('prod_options_title')
          </h4>

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
          <small>@field('colors_text')</small>
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
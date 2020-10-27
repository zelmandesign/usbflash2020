<article @php(post_class())>
  @include('partials.page-header')

  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <img src="@field('prod_hero_image', 'url')" alt="@field('prod_hero_image', 'alt')" class="img-fluid lozad prod-img-bg mb-4" />

        @if(have_rows('prod_thumbs')) 
          <div class="row">
            @while(have_rows('prod_thumbs')) @php(the_row('prod_thumbs'))
              <div class="col">
                <img src="@sub('product_image', 'url')" alt="@sub('product_image', 'alt')" class="img-fluid lozad prod-img-bg" />
              </div>
            @endwhile
          </div>
        @endif

      </div>
      <div class="col-md">
        <h1 class="entry-title">
          {!! $title !!}
        </h1>
        <div class="mb-3">
          @hasfield('prod_short_description')
            @field('prod_short_description')
          @endfield
        </div>

        @if(have_rows('paragraphs_&_icons')) 
          @while(have_rows('paragraphs_&_icons')) @php(the_row('paragraphs_&_icons'))
            <div class="row mb-4">
              <div class="col-2 d-flex align-items-center">
                <img src="@sub('icon', 'url')" alt="@sub('icon', 'alt')" class="img-fluid lozad" />  
              </div>
              <div class="col">
                @sub('verbiage')
              </div>
            </div>
          @endwhile
        @endif

        @include('partials.product.modal')

      </div>
    </div>
  </div>

</article>
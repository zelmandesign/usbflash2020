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

        <div class="modal-wrapper">
          <div class="sub mb-4">how many do you need?</div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="ex. 100" aria-label="ex. 100" aria-describedby="basic-addon2" id="qty-input" onchange="dateEntered()"> 
            <div class="input-group-append">
              <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#productModal" data-whatever="100">quick quote</button>
            </div>
          </div>

          <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="productModalLabel">New message</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Recipient:</label>
                      <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Message:</label>
                      <textarea class="form-control" id="message-text"></textarea>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Send message</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</article>
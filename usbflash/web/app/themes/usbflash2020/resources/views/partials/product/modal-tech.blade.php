<div class="modal-wrapper mt-5 text-center text-md-left">
  <div class="sub mb-4">how many do you need?</div>
  <div class="modal-qty">
    <div class="input-group mb-3">
      <input type="text" class="form-control" id="qty-input" placeholder="ex. 100" aria-label="ex. 100" aria-describedby="basic-addon2" > 
      <div class="input-group-append">
        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#productModal" id="qty-submit" data-qty="">quick quote</button>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="row">
            <div class="col-12">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <h5 class="modal-title col-12 text-center mt-4" id="productModalLabel">Quick Quote</h5>
        </div>
        <div class="modal-body">
          <div class="modal-hero-text text-center">
            We aim to get price back to you within 1 hour, although during busy periods there may be a slightly longer wait
          </div>
         
          @shortcode('[contact-form-7 id="401" title="Tech Gifts Product"]')

        </div>
      </div>
    </div>
  </div>
</div>
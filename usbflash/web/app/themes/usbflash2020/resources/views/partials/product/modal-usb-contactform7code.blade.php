<div class="modal-wrapper mt-5 text-center text-md-left">
  <div class="sub mb-4">how many do you need?</div>
  <div class="d-flex justify-content-center">
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

          @shortcode('[contact-form-7 id="399" title="USB Product"]')
         
          <form>
          <div class="form-group row">
            <label for="recipient-name" class="col-sm-4 col-form-label mb-2 mb-md-0">Quantity</label>
            <div class="col-sm-8 d-flex justify-content-center">
              <div class="input-group">
              <input type="text" name="text-983" value="ex. 100" size="40" class="form-control" id="qty" placeholder="ex. 100" id="qty"><div class="qty-btn-like">QTY</div>
              </div>
            </div>
          </div>
          <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-4 pt-0">Select Memory Size:</legend>
              <div class="col-sm-8">
                <div class="row">
                  <div class="col-3 col-md-2">
                    <div class="form-check custom-control-inline">
                      <input class="form-check-input" type="radio" name="radio-784" id="radio-7841" value="256MB">
                      <label class="form-check-label" for="gridRadios1">256MB</label>
                    </div>
                  </div>
                  <div class="col-3 col-md-2">
                    <div class="form-check custom-control-inline">
                      <input class="form-check-input" type="radio" name="radio-784" id="radio-7842" value="512MB">
                      <label class="form-check-label" for="radio-7842">512MB</label>
                    </div>
                  </div>
                  <div class="col-3 col-md-2">
                    <div class="form-check custom-control-inline">
                      <input class="form-check-input" type="radio" name="radio-784" id="radio-7843" value="1GB">
                      <label class="form-check-label" for="radio-7843">1GB</label>
                    </div>
                  </div>
                  <div class="col-3 col-md-2">
                    <div class="form-check custom-control-inline">
                      <input class="form-check-input" type="radio" name="radio-784" id="radio-7844" value="2GB">
                      <label class="form-check-label" for="radio-7844">2GB</label>
                    </div>
                  </div>
                  <div class="col-3 col-md-2">
                    <div class="form-check custom-control-inline">
                      <input class="form-check-input" type="radio" name="radio-784" id="radio-7845" value="4GB">
                      <label class="form-check-label" for="radio-7845">4GB</label>
                    </div>
                  </div>
                  <div class="col-3 col-md-2">
                    <div class="form-check custom-control-inline">
                      <input class="form-check-input" type="radio" name="radio-784" id="radio-7846" value="8GB">
                      <label class="form-check-label" for="radio-7846">8GB</label>
                    </div>
                  </div>
                  <div class="col-3 col-md-2">
                    <div class="form-check custom-control-inline">
                      <input class="form-check-input" type="radio" name="radio-784" id="radio-7847" value="16GB">
                      <label class="form-check-label" for="radio-7847">16GB</label>
                    </div>
                  </div>
                  <div class="col-3 col-md-2">
                    <div class="form-check custom-control-inline">
                      <input class="form-check-input" type="radio" name="radio-784" id="radio-7848" value="32GB">
                      <label class="form-check-label" for="radio-7848">32GB</label>
                    </div>
                  </div>
                  <div class="col-3 col-md-2">
                    <div class="form-check custom-control-inline">
                      <input class="form-check-input" type="radio" name="radio-784" id="radio-7849" value="64GB">
                      <label class="form-check-label" for="radio-7849">64GB</label>
                    </div>
                  </div>
                  <div class="col-3 col-md-2">
                    <div class="form-check custom-control-inline">
                      <input class="form-check-input" type="radio" name="radio-784" id="radio-78410" value="128GB">
                      <label class="form-check-label" for="radio-78410">128GB</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>
          <div class="form-group row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Your Name" name="your-name" value="Your name" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Your Company Name" name="text-822" value="Your Company Name">
            </div>
          </div>
          <div class="form-group row">
            <div class="col">
              <input type="text" class="form-control" id="staticEmail" name="your-email" value="Email Address" placeholder="Email Address" required>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" id="message-text" placeholder="Special Notes" name="your-message"></textarea>
          </div>
          <div class="form-group text-right">
            <input type="submit" value="Send" class="btn btn-danger">
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
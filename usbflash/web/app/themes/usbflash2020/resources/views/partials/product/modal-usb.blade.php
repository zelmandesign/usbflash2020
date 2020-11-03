<div class="modal-wrapper mt-5">
  <div class="sub mb-4">how many do you need?</div>
  <div class="input-group mb-3">
    <input type="text" class="form-control" id="qty-input" placeholder="ex. 100" aria-label="ex. 100" aria-describedby="basic-addon2" > 
    <div class="input-group-append">
      <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#productModal" id="qty-submit" data-qty="">quick quote</button>
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
         
          <form>
            <div class="form-group row">
              <label for="recipient-name" class="col-sm-4 col-form-label">Quantity</label>
              <div class="col-sm-8">
                <div class="input-group">
                  <input type="text" class="form-control" id="qty" placeholder="ex. 100" required> 
                  <div class="qty-btn-like">QTY</div>
                </div>
              </div>
            </div>
            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-4 pt-0">Select Memory Size:</legend>
                <div class="col-sm-8">
                  <div class="form-check custom-control-inline">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="256MB">
                    <label class="form-check-label" for="gridRadios1">
                      256MB
                    </label>
                  </div>
                  <div class="form-check custom-control-inline">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="512MB">
                    <label class="form-check-label" for="gridRadios2">
                      512MB
                    </label>
                  </div>
                  <div class="form-check custom-control-inline">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="1GB">
                    <label class="form-check-label" for="gridRadios3">
                      1GB
                    </label>
                  </div>
                  <div class="form-check custom-control-inline">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="2GB">
                    <label class="form-check-label" for="gridRadios4">
                      2GB
                    </label>
                  </div>
                  <div class="form-check custom-control-inline">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios5" value="4GB">
                    <label class="form-check-label" for="gridRadios5">
                      4GB
                    </label>
                  </div>
                  <div class="form-check custom-control-inline">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios6" value="8GB">
                    <label class="form-check-label" for="gridRadios6">
                      8GB
                    </label>
                  </div>
                  <div class="form-check custom-control-inline">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios7" value="16GB">
                    <label class="form-check-label" for="gridRadios7">
                      16GB
                    </label>
                  </div>
                  <div class="form-check custom-control-inline">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios8" value="32GB">
                    <label class="form-check-label" for="gridRadios8">
                      32GB
                    </label>
                  </div>
                  <div class="form-check custom-control-inline">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios9" value="64GB">
                    <label class="form-check-label" for="gridRadios9">
                      64GB
                    </label>
                  </div>
                  <div class="form-check custom-control-inline">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios10" value="128GB">
                    <label class="form-check-label" for="gridRadios10">
                      128GB
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="form-group row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Your Company Name">
              </div>
            </div>
            <div class="form-group row">
              <div class="col">
                <input type="text" class="form-control" id="staticEmail" value="" placeholder="Email Address" required>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" id="message-text" placeholder="Special Notes"></textarea>
            </div>
            <div class="form-group text-right">
              <button class="btn btn-danger">send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
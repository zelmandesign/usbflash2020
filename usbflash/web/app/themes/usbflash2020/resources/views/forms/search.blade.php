<form role="search" method="get" class="search-form form-inline ml-auto" action="{{ home_url('/') }}">
  <div class="input-group">
    <label>
      <input class="form-control"
        type="search"
        class="form-control"
        placeholder="{!! esc_attr_x('search promo gifts', 'placeholder', 'sage') !!}"
        value="{{ get_search_query(array('usb-product', 'gadgets-product')) }}"
        name="s"
      >
    </label>
    <div class="input-group-append">
      <button type="submit" class="btn btn-danger" value="{{ esc_attr_x('', 'submit button', 'sage') }}">
        <img src="@asset('images/Promo-Serach-Icon.svg')" alt="" width="20" height="20">
      </button>
    </div>
  </div>
</form>

 
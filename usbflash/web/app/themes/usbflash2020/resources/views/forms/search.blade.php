<form role="search" method="get" class="search-form form-inline ml-auto" action="{{ home_url('/') }}">
  <label>
    <input class="form-control"
      type="search"
      class="search-field"
      placeholder="{!! esc_attr_x('Search promo gifts &hellip;', 'placeholder', 'sage') !!}"
      value="{{ get_search_query(array('usb-product', 'gadgets-product')) }}"
      name="s"
    >
  </label>

  <button type="submit" class="btn btn-danger" value="{{ esc_attr_x('', 'submit button', 'sage') }}">
    <img src="@asset('images/Magnifying-Glass-Icon.svg')" alt="" width="20" height="20">
  </button>
</form>
 
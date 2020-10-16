<form role="search" method="get" class="search-form form-inline my-2 my-lg-0" action="{{ home_url('/') }}">
  <label>
    <input class="form-control mr-sm-2"
      type="search"
      class="search-field"
      placeholder="{!! esc_attr_x('Search promo gifts &hellip;', 'placeholder', 'sage') !!}"
      value="{{ get_search_query() }}"
      name="s"
    >
  </label>

  <input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="{{ esc_attr_x('Search', 'submit button', 'sage') }}">
</form>

<div class="col-md-4 col-sm-6 mb-4">
  <a href="{{ get_permalink($single_product['post_id']) }}" class="...">
    <img src="@asset('images/home_prod_test.png')" alt="" class="img-fluid">
    <div class="prod-name">{{ $single_product['title'] }}</div>
  </a>

  @if ($single_product['post_type'] == "usb-product")
    {{ $single_product_terms = get_the_terms($single_product['post_id'], 'usb-category') }}
  @elseif ($single_product['post_type'] == "gadgets-product")
    {{ $single_product_terms = get_the_terms($single_product['post_id'], 'gadgets-category') }}
  @endif

  <div class="category-name">{{ $single_product_terms[0]->name }}</div>
  <img src="@asset('images/Magnifying-Glass-Icon.svg')" alt="" width="30" height="30" class="prod-glass">
  <div class="bt-line-prod"></div>
</div>
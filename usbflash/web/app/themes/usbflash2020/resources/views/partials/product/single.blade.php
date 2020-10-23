<div class="col-md-4 col-sm-6 mb-4">
  <a href="{{ get_permalink($post['post_id']) }}" class="...">
    <img src="@asset('images/home_prod_test.png')" alt="" class="img-fluid">
    <div class="prod-name">{{ $post['title'] }}</div>
  </a>

  @if ($post['post_type'] == "usb-product")
    {{ $post_terms = get_the_terms($post['post_id'], 'usb-category') }}
  @elseif ($post['post_type'] == "gadgets-product")
    {{ $post_terms = get_the_terms($post['post_id'], 'gadgets-category') }}
  @endif

  <div class="category-name">{{ $post_terms[0]->name }}</div>
  <img src="@asset('images/Magnifying-Glass-Icon.svg')" alt="" width="30" height="30" class="prod-glass">
  <div class="bt-line-prod"></div>
</div>
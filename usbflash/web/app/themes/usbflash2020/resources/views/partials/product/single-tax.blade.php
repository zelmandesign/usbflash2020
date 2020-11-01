<div class="col-md-4 mb-4 ">
  <a href="{{ get_permalink() }}">
    <img src="@field('prod_hero_image', 'url', get_the_ID())" alt="@field('prod_hero_image', 'alt', get_the_ID())" class="img-fluid prod-img-bg">
    <div class="prod-name">@title</div>
  </a>

  @if (get_post_type( get_the_ID() ) == "usb-product")
    {{ $post_terms = get_the_terms(get_the_ID(), 'usb_product_tag') }}
  @elseif (get_post_type( get_the_ID() ) == "gadgets-product")
    {{ $post_terms = get_the_terms(get_the_ID(), 'tech_product_tag') }}
  @endif

  <div class="category-name">{{ $post_terms[0]->name }}</div>
    <a href="{{ get_permalink() }}"><img src="@asset('images/Magnifying-Glass-Icon.svg')" alt="" width="30" height="30" class="prod-glass"></a>
  <div class="bt-line-prod"></div>
</div>
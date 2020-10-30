@extends('layouts.app')

@section('content')
  @include('partials.product.hero-tax')

  <div class="container">

    @php
      global $wp_query;
      $paged = !empty($wp_query->query_vars['paged']) ? $wp_query->query_vars['paged'] : 1;
      $prev_posts = ( $paged - 1 ) * $wp_query->query_vars['posts_per_page'];
      $from = 1 + $prev_posts;
      $to = count($wp_query->posts) + $prev_posts;
      $of = $wp_query->found_posts;
    @endphp

    <div class="row prod-pagination">
      <div class="col-md-2 mb-3">
        {{ single_cat_title() }}
      </div>
      <div class="col-md-2 mb-3">
        @if (get_post_type( get_the_ID() ) == "usb-product")
          @if($usbTerms)
            <select class="form-control form-control-sm" onchange="window.location=this.value">
              <option selected value="">+ Filter Products</option>
              @foreach ($usbTerms as $item)
                @if($item->name == "Featured")
                  return false
                @else 
                  <option value="/usb-category/{{ $item->slug }}">{{ $item->name }}</option>
                @endif
              @endforeach
            </select>
          @endif
        @elseif (get_post_type( get_the_ID() ) == "gadgets-product")
          @if($gadgetsTerms)
            <select class="form-control form-control-sm" onchange="window.location=this.value">
              <option selected value="">+ Filter Products</option>
              @foreach ($gadgetsTerms as $item)
                @if($item->name == "Featured")
                  return false
                @else 
                  <option value="/gadgets-category/{{ $item->slug }}">{{ $item->name }}</option>
                @endif
              @endforeach
            </select>
          @endif
        @endif
      </div>
      <div class="col-md-3 offset-md-4 prod-res mb-3">
        Displaying {{ $from }}-{{ $to }} of {{ $of }} results
      </div>
      <div class="col-md-1 text-right mb-3">
        {{ the_posts_pagination( array(
          'screen_reader_text' => ' ', 
          'prev_text'          => ' ',
          'next_text'          => ' ',
          'before_page_number' => ' ',
          'after_page_number'  => ' ',
        )) }}
      </div>
    </div>

    <hr>

    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no products were found.', 'sage') }}
      </div>
    @endif
    
    <div class="row mb-4 product-list">
      @while (have_posts()) @php the_post() @endphp
        @include('partials.product.single-tax')
      @endwhile
    </div>

  </div>

@endsection

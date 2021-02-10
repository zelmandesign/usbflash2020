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
      <div class="col-md-2 mb-3 mb-md-0">
        <h2>All Products</h2>
      </div>
      <div class="col-md-2 mb-3 mb-md-0">
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
      </div>
      <div class="col-md-6 offset-md-2 prod-res mb-3 mb-md-0 d-none d-md-flex justify-content-end align-items-center">
        <div class="ml-md-4">Displaying {{ $from }}-{{ $to }} of {{ $of }} results</div>
        <div class="prod-pagi">
          {{ the_posts_pagination( array(
            'screen_reader_text' => ' ', 
            'prev_text'          => ' ',
            'next_text'          => ' ',
            'before_page_number' => ' ',
            'after_page_number'  => ' ',
            'mid_size' => 2,
            'show_all' => true,
          )) }}
        </div>
      </div>
      <div class="col-md-6 offset-md-2 prod-res mb-1 mb-md-0 d-flex d-md-none justify-content-end flex-column">
        <div class="ml-md-4 pb-3">Displaying {{ $from }}-{{ $to }} of {{ $of }} results</div>
        <div class="prod-pagi">
          {{ the_posts_pagination( array(
            'screen_reader_text' => ' ', 
            'prev_text'          => ' ',
            'next_text'          => ' ',
            'before_page_number' => ' ',
            'after_page_number'  => ' ',
            'mid_size' => 2,
            'show_all' => true,
          )) }}
        </div>
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

    <div class="d-flex justify-content-end">
      <div class="prod-pagi">
        {{ the_posts_pagination( array(
          'screen_reader_text' => ' ', 
          'prev_text'          => ' ',
          'next_text'          => ' ',
          'before_page_number' => ' ',
          'after_page_number'  => ' ',
          'mid_size' => 2,
          'show_all' => true,
        )) }}
      </div>
    </div>
  </div>

@endsection

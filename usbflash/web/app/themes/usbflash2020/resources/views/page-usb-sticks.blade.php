@extends('layouts.app')

@section('content')
  @include('partials.product.hero-top-category')

  <div class="container">

      @php
        $post_type = 'usb-product';
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 12, 
          'paged' => $paged, 
          'post_type' => $post_type
        );
        query_posts($args);

        global $wp_query;
        $paged = !empty($wp_query->query_vars['paged']) ? $wp_query->query_vars['paged'] : 1;
        $prev_posts = ( $paged - 1 ) * $wp_query->query_vars['posts_per_page'];
        $from = 1 + $prev_posts;
        $to = count($wp_query->posts) + $prev_posts;
        $of = $wp_query->found_posts;
      @endphp

      <div class="row prod-pagination">
        <div class="col-md-2">
          All Products
        </div>
        <div class="col-md-2">
          @if($usbTerms)
            <select class="form-control form-control-sm" onchange="window.location=this.value">
              <option selected value="">+ Filter Products</option>
              @foreach ($usbTerms as $item)
                <option value="/usb-category/{{ $item->slug }}">{{ $item->name }}</option>
              @endforeach
            </select>
          @endif
        </div>
        <div class="col-md-3 offset-md-4 prod-res">
          Displaying {{ $from }}-{{ $to }} of {{ $of }} results
        </div>
        <div class="col-md-1 text-right">
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
        @while(have_posts()) @php(the_post())
          @include('partials.product.single-tax')
        @endwhile
      </div>
  
  </div>

@endsection

@section('sidebar')
  @include('partials.sidebar')
@endsection
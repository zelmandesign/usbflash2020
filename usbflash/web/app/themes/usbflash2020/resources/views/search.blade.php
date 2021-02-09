@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="container">
    @php
      //$post_type = 'gadgets-product';
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        's' => sanitize_text_field( get_search_query( false ) ),
        'posts_per_page' => 12, 
        'paged' => $paged, 
        'post_type' => array('usb-product', 'gadgets-product')
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
      <div class="col-md-2 mb-3 mb-md-0">
        <h2>Search Results:</h2>
      </div>
      <div class="col-md-2 mb-3 mb-md-0">
        
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
      <div class="col-md-6 offset-md-2 prod-res mb-3 mb-md-0 d-flex d-md-none justify-content-end flex-column">
        <div class="ml-md-4 mb-1">Displaying {{ $from }}-{{ $to }} of {{ $of }} results</div>
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

    @if (! have_posts())
      <x-alert type="warning">
        {!! __('Sorry, no results were found.', 'sage') !!}
      </x-alert>
    @endif
    
    <div class="row mb-4 product-list">
      @while(have_posts()) @php(the_post())
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

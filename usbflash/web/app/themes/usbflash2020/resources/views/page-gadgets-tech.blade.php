@extends('layouts.app')

@section('content')
  @include('partials.product.hero-top-category')

  <div class="container">

      @php 
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array('posts_per_page' => 9, 'paged' => $paged,'post_type' => 'gadgets-product' );
      query_posts($args); @endphp



      <div class="row">
        <div class="col-md-2">
          All Products
        </div>
        <div class="col-md-2">
          filter products
        </div>
        <div class="col-md-3 offset-4">
          Displaying 1-6 of 6 results
        </div>
        <div class="col-md-1 text-right bg-danger">
          {{ the_posts_pagination( array(
            'screen_reader_text' => ' ', 
            'prev_text'          => ' ',
            'next_text'          => ' ',
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'nieuwedruk' ) . ' </span>',
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

@section('sidebar')
  @include('partials.sidebar')
@endsection

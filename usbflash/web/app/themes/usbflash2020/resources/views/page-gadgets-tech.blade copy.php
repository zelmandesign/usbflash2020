@extends('layouts.app')

@section('content')
  @include('partials.product.hero-top-category')

  <div class="container">
    @if($gadgetsQuery)
      <div class="row product-list">
        @foreach($gadgetsQuery as $single_product)
          @include('partials.product.single')
        @endforeach
      </div>
    @else
      <x-alert type="warning">
        {!! __('Sorry, no results were found.', 'sage') !!}
      </x-alert>
    @endif
  </div>
  {!! get_the_posts_navigation() !!}


<?php 
// the query to set the posts per page to 3
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => 1, 'paged' => $paged,'post_type' => 'gadgets-product' );
query_posts($args); ?>
<!-- the loop -->
<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
        @php
            the_title();
        @endphp
        <!-- the title, the content etc.. -->
<?php endwhile; ?>
<!-- pagination -->
<?php next_posts_link(); ?>
<?php previous_posts_link(); ?>
@php
    get_the_posts_navigation([
    'screen_reader_text' => '',
    'prev_text'          => 'Older events',
    'next_text'          => 'Newer events'
  ]);
@endphp
<?php else : ?>
<!-- No posts found -->
<?php endif; ?>
@endsection

@section('sidebar')
  @include('partials.sidebar')
@endsection

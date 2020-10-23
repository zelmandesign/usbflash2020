@extends('layouts.app')

@section('content')
  @include('partials.product.hero-tax')

  <div class="container">

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
  {{ the_posts_pagination() }}
  <?php next_posts_link('Newer posts'); ?>
  <?php previous_posts_link('Older posts' ); ?>
  {!! get_the_posts_navigation([
    'screen_reader_text' => '',
    'prev_text'          => 'Older events',
    'next_text'          => 'Newer events'
  ]) !!}
@endsection

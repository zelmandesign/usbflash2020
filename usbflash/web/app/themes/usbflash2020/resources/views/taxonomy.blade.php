@extends('layouts.archive')

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
  {!! get_the_posts_navigation() !!}
@endsection

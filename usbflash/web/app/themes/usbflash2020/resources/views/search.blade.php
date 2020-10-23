@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="container">
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

    {!! get_the_posts_navigation() !!}
  </div>
@endsection

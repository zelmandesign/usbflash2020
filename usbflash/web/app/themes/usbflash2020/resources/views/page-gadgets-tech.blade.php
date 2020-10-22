@extends('layouts.archive')

@section('content')
  @include('partials.hero-product')

  <div class="container">
    @if($gadgetsQuery)
      <div class="row">
        @foreach($gadgetsQuery as $gadgets_single)          
          @include('partials.product.single')
        @endforeach
      </div>
    @else
      <x-alert type="warning">
        {!! __('Sorry, no results were found.', 'sage') !!}
      </x-alert>
    @endif
  </div>

@endsection

@section('sidebar')
  @include('partials.sidebar')
@endsection

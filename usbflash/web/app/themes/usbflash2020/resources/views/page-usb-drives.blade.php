@extends('layouts.archive')

@section('content')
  @include('partials.hero-product')

  <div class="container">
    @if($usbdrivesQuery)
      @foreach($usbdrivesQuery as $post)          
        @include('partials.product.single')
      @endforeach
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

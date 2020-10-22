@extends('layouts.archive')

@section('content')
  @include('partials.hero-product')

  <div class="container">
    @if($usbdrivesQuery)
      @foreach($usbdrivesQuery as $post)          
        <div class="...">
          <p><a href="#" class="...">{{ $post['title'] }}</a></p>
        </div>
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

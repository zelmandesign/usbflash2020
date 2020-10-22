@extends('layouts.archive')

@section('content')
  @include('partials.hero-product')

  <div class="container">
    @if($gadgetsQuery)
      @foreach($gadgetsQuery as $post)          
        <div class="...">
          <p><a href="{{ get_permalink($post['title']) }}" class="...">{{ $post['title'] }}</a></p>
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

@extends('layouts.home')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('.partials.home.hero')
  @endwhile
@endsection

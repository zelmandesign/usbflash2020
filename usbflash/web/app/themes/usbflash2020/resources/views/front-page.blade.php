@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    
    <div class="container bg-danger">dsasddasdadas</div>

  @endwhile
@endsection

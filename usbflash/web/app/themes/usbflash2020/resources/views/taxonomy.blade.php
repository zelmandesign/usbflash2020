@extends('layouts.archive')

@section('content')
  @include('partials.product.hero-product')


  <div class="category-header" style="background: url('@php echo $image; @endphp');">
    <div class="container">
      <div class="page-header">
      
        <div id="breadcrumbs">
          <?php
          if(function_exists('bcn_display'))
          {
          bcn_display();
          }
          ?>
        </div>

        
        <h1>{{ $title }}</h1>

        <div class="cat-desc mb-4">
          <div class="row">
            <div class="col-md-4">
              @php echo category_description( get_category_by_slug('category-slug')->term_id ); @endphp
            </div>
          </div>
        </div>
      
      </div>
    </div>  
  </div>  

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

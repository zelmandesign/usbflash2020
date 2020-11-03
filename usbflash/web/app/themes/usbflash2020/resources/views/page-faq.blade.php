@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="container pl-md-5 pr-md-5 pt-3">
      <h1 class="page-title mb-2">
        {{ $title }}
      </h1>

      <div class="mb-4">
        @hasfield('faq_text')
          @field('faq_text')
        @endfield
      </div>

      @hasfield('accordion_paragraphs')
        <div class="accordion" id="accordionFaq">
          @fields('accordion_paragraphs') @php($row++)
            <div class="card mb-3">
              <div class="card-header" id="heading{{ $row }}">
                <h2 class="mb-0 d-flex justify-content-between align-items-center">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $row }}" aria-expanded="true" aria-controls="collapse{{ $row }}">
                    @sub('faq_title')
                  </button>

                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $row }}" aria-expanded="true" aria-controls="collapse{{ $row }}">
                    <img src="@asset('images/faq-icon.png')" class="mr-3" alt="">
                  </button>
                </h2>
              </div>

              <div id="collapse{{ $row }}" class="collapse" aria-labelledby="heading{{ $row }}" data-parent="#accordionFaq">
                <div class="card-body">
                  @sub('faq_text')
                </div>
              </div>
            </div>
          @endfields
        </div>
      @endfield
      
      

        
      

    </div>
  @endwhile
@endsection

@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="container">
    @hasfield('hero')
      @group('hero')
        <div class="row">
          @hassub('image')
            <div class="col-md-7">
              <img src="@sub('image', 'url')" alt="@sub('image', 'alt')" class="img-fluid mb-4 mb-md-0">
            </div>
          @endsub
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-9">
                @hassub('heading')
                  <div class="heading">@sub('heading')</div>
                @endsub
                @hassub('subheading')
                  <div class="subheading mb-3">@sub('subheading')</div>
                @endsub
                @hassub('hero_text')
                  <div class="text">
                    @sub('hero_text')
                  </div>
                @endsub
              </div>
            </div>
          </div>
        </div>
      @endgroup
    @endfield

    @hasfield('about_paragraphs')
      <div class="row">
        <div class="col-md-11">
          @fields('about_paragraphs')
            @hassub('title')
              <div class="title mt-5 mb-2">@sub('title')</div>
            @endsub
            @hassub('text')
              @sub('text')
            @endsub
          @endfields
        </div>
      </div>
    @endfield
  </div>
@endsection

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="container pr-md-5">
      <div class="row">
        <div class="col-md-5">
          <div class="contact-form-wrapper">
            @hasfield('contact_form_title')
              <div class="form-title">@field('contact_form_title')</div>
            @endfield
            @shortcode('[contact-form-7 id="237" title="Contact form 1"]')
          </div>
        </div>
        <div class="col-md-6 pl-md-4 get-in-touch-wrapper">
          @hasfield('contact_heading')
            <h1 class="hero-heading mt-5 mt-md-0">
              @field('contact_heading')
            </h1>
          @endfield

          @hasfield('contact_text')
            <div class="mt-3 mb-3">
              @field('contact_text')
            </div>
          @endfield
          @hasfield('opening_hours_text')
            <div class="text-bold">
              Opening Hours:  
            </div>
            @field('opening_hours_text')
          @endfield
          @hasfield('phone_no')
            <div class="text-bold mt-3">
              Call us <a href="tel:@field('phone_no')" class="ml-2">@field('phone_no')</a>
            </div>
          @endfield
          @hasfield('contact_email')
            <div class="text-bold mt-4">
              Email: <a href="tel:@field('contact_email')" class="ml-3">@field('contact_email')</a>
            </div>
          @endfield

          @hasoption('address')
            <div class="text-bold mt-4">
              Postal Address
            </div>
            @option('address')
          @endoption

          <div class="text-bold mt-4">
            Social
          </div>
          @hasoption('facebook')
            <a href="@option('facebook')" target="_blank"><img src="@asset('images/icon-facebook.webp')" class="lozad" alt="USB Flash Facebook"></a>
          @endoption
          @hasoption('twitter')
            <a href="@option('twitter')" target="_blank"><img src="@asset('images/icon-twitter.webp')" class="lozad" alt="USB Flash Twitter"></a>
          @endoption
          @hasoption('instagram')
            <a href="@option('instagram')" target="_blank"><img src="@asset('images/icon-instagram.webp')" class="lozad" alt="USB Flash Instragram"></a>
          @endoption
        </div>
      </div>
    </div>
  @endwhile
@endsection


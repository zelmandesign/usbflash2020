@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="contact-form-wrapper">
            @hasfield('contact_form_title')
              <div class="form-title">@field('contact_form_title')</div>
            @endfield
            <form class="form-inside">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="first_name">First Name</label>
                  <input type="text" class="form-control" id="first_name" placeholder="First name">
                </div>
                <div class="form-group col-md-6">
                  <label for="last_name">Last Name</label>
                  <input type="text" class="form-control" id="last_name" placeholder="Last name">
                </div>
              </div>
              <div class="form-group">
                <label for="company_name">Company Name *</label>
                <input type="text" class="form-control" id="company_name" placeholder="Company Name">
              </div>
              <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message-text">Message / Additional info</label>
                <textarea class="form-control" id="message-text" placeholder="Please specify any additional requirements here"></textarea>
              </div>
              <div class="form-group text-right">
                <button class="btn btn-danger">SUBMIT</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5 get-in-touch-wrapper">
          @hasfield('contact_heading')
            <div class="hero-heading mt-5 mt-md-0">
              @field('contact_heading')
            </div>
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
          <a href="@option('facebook')" target="_blank"><img src="@asset('images/icon-facebook.webp')" class="lozad" alt="USB Flash Facebook"></a>
          <a href="@option('twitter')" target="_blank"><img src="@asset('images/icon-twitter.webp')" class="lozad" alt="USB Flash Twitter"></a>
          <a href="@option('instagram')" target="_blank"><img src="@asset('images/icon-instagram.webp')" class="lozad" alt="USB Flash Instragram"></a>

        </div>
      </div>
    </div>
  @endwhile
@endsection

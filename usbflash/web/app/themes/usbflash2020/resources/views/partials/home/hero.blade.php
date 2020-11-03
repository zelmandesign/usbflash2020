<section class="home-hero">
  <div class="bg-wrapper" style="background: url('@field('home_hero_background_image')') bottom center no-repeat;">
    @include('partials.header')
    
    <div class="container">
      <div class="hero-wrapper d-flex align-items-center">
        <div class="hero-head">
          @hasfield('hero_typed_text')
            <div class="typed-strings">
              @fields('hero_typed_text')
              <p>@sub('paragraph')</p>
              @endfields
            </div>
            <div id="typed"></div>
          @endfield

          @hasfield('hero_heading')
            <h1 class="hero-heading">
              @field('hero_heading')
            </h1>
          @endfield
          
          @hasfield('hero_text')
            <div class="hero-text">
              @field('hero_text')
            </div>
          @endfield
          
          @group('hero_buttons')
            <div class="hero-buttons mb-5">
              @hassub('link1')
                <a href="@sub('link1')" class="btn btn-danger mr-2">@sub('button1_text')</a>
              @endsub
              @hassub('link2')
                <a href="@sub('link2')" class="btn btn-outline-danger">@sub('button2_text')</a>
              @endsub
            </div>
          @endgroup
          
        </div>
      </div>

      <div class="d-flex justify-content-center mt-5">
        <img src="@asset('images/chevron-down-white.gif')" alt="" width="95" height="95" class="ml-2">
      </div>
      
    </div>
  </div>
</section>
<footer class="content-info d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-md-3 pb-4">
        <div class="mb-4"><strong>NAVIGATE</strong></div>
        @if (has_nav_menu('footer_navigation'))
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'navbar-nav']) !!}
        @endif
      </div>
      <div class="col-md-4 pb-4">
        <strong>CONNECT</strong>
        <div class="social-media">
          @hasoption('facebook')
            <a href="@option('facebook')" target="_blank"><img src="@asset('images/icon-facebook.webp')" class="lozad" alt="USB Flash Facebook" width="39" height="39"></a>
          @endoption
          @hasoption('twitter')
            <a href="@option('twitter')" target="_blank"><img src="@asset('images/icon-twitter.webp')" class="lozad" alt="USB Flash Twitter" width="39" height="39"></a>
          @endoption
          @hasoption('instagram')
            <a href="@option('instagram')" target="_blank"><img src="@asset('images/icon-instagram.webp')" class="lozad" alt="USB Flash Instragram" width="39" height="39"></a>
          @endoption
        </div>
        <div class="mb-4"><strong>COMPANY INFO</strong></div>
        @php the_field('company_info', 'option'); @endphp
      </div> 
      <div class="col-md-3 d-none d-md-flex pb-4">
        <img src="@asset('images/UK-Map-Contact.svg')" class="lozad" alt="USB Flash Map">
      </div> 
      <div class="col-md-2 pb-4">
        <div class="mb-4"><strong>CONTACT</strong></div>
        @php the_field('address', 'option'); @endphp
        <br>
        Tel: @php the_field('telephone', 'option'); @endphp<br>
        Fax: @php the_field('fax', 'option'); @endphp
      </div>  
    </div>
  </div>
</footer>
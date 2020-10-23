<footer class="content-info d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <strong>NAVIGATE</strong>
        @if (has_nav_menu('footer_navigation'))
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'navbar-nav']) !!}
        @endif
      </div>
      <div class="col-md-4 col-sm-6 mb-3">
        <strong>CONNECT</strong>
        <div class="social-media">
          <i class="fab fa-facebook-f"></i>
          <a href="@php the_field('facebook', 'option'); @endphp" target="_blank"><img src="@asset('images/icon-facebook.webp')" class="lozad" alt="USB Flash Facebook"></a>
          <a href="@php the_field('twitter', 'option'); @endphp" target="_blank"><img src="@asset('images/icon-twitter.webp')" class="lozad" alt="USB Flash Twitter"></a>
          <a href="@php the_field('instagram', 'option'); @endphp" target="_blank"><img src="@asset('images/icon-instagram.webp')" class="lozad" alt="USB Flash Instragram"></a>
        </div>
        <strong>COMPANY INFO</strong><br>
        @php the_field('company_info', 'option'); @endphp
      </div> 
      <div class="col-md-3 col-sm-6 mb-3">
        <img src="@asset('images/UK-Map-Contact.svg')" class="lozad" alt="USB Flash Map">
      </div> 
      <div class="col-md-2 col-sm-6 mb-3">
        <strong>CONTACT</strong><br>
        @php the_field('address', 'option'); @endphp
        <br>
        Tel: @php the_field('telephone', 'option'); @endphp<br>
        Fax: @php the_field('fax', 'option'); @endphp
      </div>  
    </div>
  </div>
</footer>
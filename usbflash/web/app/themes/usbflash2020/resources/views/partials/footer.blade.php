<footer class="content-info d-flex align-items-center justify-content-center">
  <div class="footer-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <strong>NAVIGATE</strong>
          {{-- @php dynamic_sidebar('sidebar-footer')) @endphp --}}
        </div> 
        <div class="col-md-4 col-sm-6 mb-3">
          <strong>CONNECT</strong>
          <div class="social-media">
            <a href="@php the_field('facebook', 'option'); @endphp" target="_blank"><img src="@asset('images/Facebook-Icon.svg')" class="lozad" alt="USB Flash Facebook"></a>
            <a href="@php the_field('twitter', 'option'); @endphp" target="_blank"><img src="@asset('images/Twitter-Icon.svg')" class="lozad" alt="USB Flash Twitter"></a>
            <a href="@php the_field('instagram', 'option'); @endphp" target="_blank"><img src="@asset('images/Instagram-Icon-Footer.svg')" class="lozad" alt="USB Flash Instragram"></a>
          </div>
          <strong>COMPANY INFO</strong><br>
          @php the_field('company_info', 'option'); @endphp
          VAT No. GB 947240516<br>
          Company No: 06825262
        </div> 
        <div class="col-md-3 col-sm-6 mb-3">
          <img src="@asset('images/UK-Map-Contact.svg')" class="lozad" alt="USB Flash Map">
        </div> 
        <div class="col-md-2 col-sm-6 mb-3">
          <strong>CONTACT</strong><br>
          @php the_field('address', 'option'); @endphp
          USB Flash Ltd<br>
          Heath Road<br>
          Bradfield<br>
          Essex<br>
          CO11 2UZ<br>
          <br>
          Tel:  @php the_field('telephone', 'option'); @endphp<br>
          Fax: @php the_field('fax', 'option'); @endphp
        </div>  
      </div>
    </div>
  </div>
</footer>
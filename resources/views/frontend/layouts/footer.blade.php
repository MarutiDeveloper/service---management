<!-- info section -->

<section class="info_section layout_padding2">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 info_col">
        <div class="info_contact">
          <h4>
            Address
            @foreach ($companyProfile as $Profile)

            </h4>
            <div class="contact_link_box">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
              {{$Profile->office_address ?? 'Office Address'}}
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
              {{$Profile->phone_number ?? 'Phone Number'}}
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
              {{$Profile->email_address ?? 'Email Address'}}
              </span>
            </a>
            </div>
          </div>
          <!-- <div class="info_social">
            @if(!empty($Profile->social_media_links))
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <a href="{{ $Profile->social_media_links }}" target="_blank" rel="noopener noreferrer">
                {{ $Profile->social_media_links }}
                </a>
            @else
              <i class="fa fa-facebook" aria-hidden="true"></i>
              <span>Social Media Links</span>
          @endif
          </div> -->
          </div>
        @endforeach
      <div class="col-md-6 col-lg-3 info_col">
        <div class="info_detail">
          <h4>
            Info
          </h4>
          <p>
            necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
            words, combined with a handful
          </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-2 mx-auto info_col">
        <div class="info_link_box">
          <h4>
            Links
          </h4>
          <div class="info_links">
            <a class="active" href="{{ url('/') }}">
            <i class="fa fa-home" aria-hidden="true"></i>&nbsp; Home
            </a>
            <a class="" href="{{ url('/about') }}">
            <i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp; About
            </a>
            <a class="" href="{{ url('/services') }}">
            <i class="fa fa-wrench" aria-hidden="true"></i>&nbsp; Services
            </a>
            <a class="" href="{{ url('/why') }}">
            <i class="fa fa-lightbulb-o" aria-hidden="true"></i>&nbsp; Why Us
            </a>
            <a class="" href="{{ url('/team') }}">
            <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;Team
            </a>
            <a href="{{ route('home.clearCache') }}" class="footer-link">
              <i class="fas fa-recycle"></i>&nbsp; Clear/Re-sett
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 info_col ">
        <h4>
          Subscribe
        </h4>
        <form action="#">
          <input type="text" placeholder="Enter email" />
          <button type="submit">
            Subscribe
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- end info section -->


<!-- footer section -->
<section class="footer_section">
  <div class="container">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By Service Management
    </p>
  </div>
</section>
<!-- footer section -->

<!-- jQery -->
<script type="text/javascript" src="{{ asset('assets/frontend-2/js/jquery-3.4.1.min.js')}}"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
<!-- bootstrap js -->
<script type="text/javascript" src="{{ asset('assets/frontend-2/js/bootstrap.js')}}"></script>
<!-- owl slider -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<!-- custom js -->
<script type="text/javascript" src="{{ asset('assets/frontend-2/js/custom.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>
<!-- End Google Map -->
@yield('customJs')

</body>

</html>